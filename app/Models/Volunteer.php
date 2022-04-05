<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Person
{
    public $category_class = VolunteerCategory::class;
    protected $fillable = ['comment', 'name', 'phone', 'sex'];
    public const SEX_MALE = 0;
    public const SEX_FEMALE = 1;
//    public const SEX_MULTIPLE = 2;
    public const SEX_SWITCH_STATES = [
        'on' => ['value' => self::SEX_MALE, 'text' => self::SEX_OPTIONS[self::SEX_MALE], 'color' => 'primary'],
        'off' => ['value' => self::SEX_FEMALE, 'text' => self::SEX_OPTIONS[self::SEX_FEMALE], 'color' => 'success'],
    ];
    public const SEX_OPTIONS = [
        self::SEX_MALE => 'Мужчина',
        self::SEX_FEMALE => 'Женщина',
//        self::SEX_MULTIPLE => 'Несколько человек',
    ];

    public static function getTableTitles(): array
    {
        return array_merge(parent::getTableTitles(), ['sex' => __('Sex')]);
    }

    public function getTableInfoAttribute(): array
    {
        return array_merge(
            parent::getTableInfoAttribute(),
            [
                'sex' => self::SEX_OPTIONS[(bool)$this->sex]
            ]
        );
    }
}
