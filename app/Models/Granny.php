<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;

class Granny extends Model
{
    use HasFactory;
    protected $fillable = ['granny_name', 'granny_phone', 'address', 'passport_id'];
    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }
    static public function getHelpHistory(array $helpGiven, bool $use_emoji = true): string
    {
        $help_received_this_week = false;
        $dates = array_map(function(array $helpGiven) use (&$help_received_this_week) {
            $date = Date::parse($helpGiven['hg_timestamp']);
            $help_received_this_week = $help_received_this_week || $date->isCurrentWeek();
            return $date->format('j F Y');
        }, $helpGiven);
        $ending = '';
        if($use_emoji) {
            $ending = $help_received_this_week ? '❌' : '✅';
        }
        return implode(', ', $dates) . ' ' . $ending;
    }
    protected static function boot()
    {
        parent::boot();
        parent::saved(function(self $granny) {
            $granny->helpGiven()->create(['hg_timestamp'=>Carbon::now()]);
        });
    }
}
