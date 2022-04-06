<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;

class Destitute extends Person
{
    public $category_class = DestituteCategory::class;
    protected $fillable = ['name', 'phone', 'address', 'passport_id', 'id_code'];
    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }

    static public function getHelpHistory(array $helpGiven, bool $use_emoji = true): string
    {
        $help_received_last_ten_days = false;
        $ten_day_ago = Carbon::now()->subDays(9);
        $dates = array_map(function(array $helpGiven) use (&$help_received_last_ten_days, $ten_day_ago) {
            $date = Date::parse($helpGiven['hg_timestamp']);
            $help_received_last_ten_days = $help_received_last_ten_days || $date->greaterThanOrEqualTo($ten_day_ago);
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

    public static function getTableTitles(): array
    {
        return array_merge(
            parent::getTableTitles(),
            [
                'passport_id' => __('Passport id'),
                'address' => __('Address'),
                'helpGiven' => __('Receivings'),
                'id_code' => __('id code'),
            ]
        );
    }

    public function getTableInfoAttribute(): array
    {
        return array_merge(
            parent::getTableInfoAttribute(),
            [
                'helpGiven' => self::getHelpHistory($this->helpGiven->toArray())
            ]
        );
    }
}
