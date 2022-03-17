<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;

class Destitute extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'address', 'passport_id'];
    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }
    static public function getHelpHistory(array $helpGiven, bool $use_emoji = true): string
    {
        $help_received_last_ten_days = false;
        $dates = array_map(function(array $helpGiven) use (&$help_received_last_ten_days) {
            $date = Date::parse($helpGiven['hg_timestamp']);
            $help_received_last_ten_days = $help_received_last_ten_days || $date->greaterThanOrEqualTo((clone $date)->subDays(10));
            return $date->format('j F Y');
        }, $helpGiven);
        $give_help_when_resources_are_low = $help_received_last_ten_days ? '❌' : '✅';
        if(!$use_emoji) {
            $give_help_when_resources_are_low = ' ';
        }
        return trim($give_help_when_resources_are_low  . ' '. implode(', ', $dates));
    }
    protected static function boot()
    {
        parent::boot();
        parent::created(function(self $granny) {
            if(!$granny->helpGiven->count()) {
                $granny->helpGiven()->create(['hg_timestamp' => Carbon::now()]);
            }
        });
    }
}
