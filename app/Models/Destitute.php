<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;
use App\Admin\Helpers\GridHelper;

class Destitute extends Person
{
    public $category_class = DestituteCategory::class;
    public const REFUGEE_ID = 5;

    protected $fillable = ['name', 'phone', 'address', 'passport_id', 'id_code', 'comment', 'family_members'];
    protected $casts = ['family_members' => 'json'];
    protected $appends = ['family_members_count'];

    public function getFamilyMembersCountAttribute():string
    {
        $family_members = $this->family_members ? array_filter($this->family_members) : [];
        return count($family_members) + ($self = 1);
    }
    public function setFamilyMembersAttribute($value):self
    {
        $this->attributes['family_members'] = $value ? json_encode(array_values($value)) : $value;
        return $this;
    }
    public function setNameAttribute($value):self
    {
        $this->attributes['name'] = $value ? mb_convert_case($value, MB_CASE_TITLE) : $value;
        return $this;
    }
    public function getChildrenCountAttribute():string
    {
        $family_members = $this->family_members ? array_filter($this->family_members) : [];
        $result = 0;
        foreach($family_members as $member) {
            $result += @$member['is_child'];
        }
        return $result;
    }
    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }

    static public function getHelpHistory(array $helpGiven, bool $use_emoji = false): string
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
                'helpGiven' => __('Receivings'),
            ]
        );
    }
    public static function familyMemberToString($member):string
    {
        if(!$member || is_string($member)) {
            return '';
        }

        return @$member['name'] . ' ' . @$member['phone'] . ' ' . @$member['passport_id'] . ' ' . @$member['comment'] . (@$member['is_child'] ? __('child') :'');
    }

    public function getTableInfoAttribute(): array
    {
        return array_merge(
            parent::getTableInfoAttribute(),
            [
                'helpGiven' => self::getHelpHistory($this->helpGiven->toArray()),
                'family_members' => $this->family_members ? GridHelper::arrayToList($this->family_members, function( $member){return '' ;self::familyMemberToString($member);}) : '',
            ]
        );
    }
}
