<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Person
{
    public $category_class = VolunteerCategory::class;
    protected $fillable = ['comment', 'name', 'phone', 'sex'];
    protected $casts = ['sex' => 'int'];
    public const SEX_MALE = 0;
    public const SEX_FEMALE = 1;
//    public const SEX_MULTIPLE = 2;
    public const SEX_OPTIONS = [
        self::SEX_MALE => 'Мужчина',
        self::SEX_FEMALE => 'Женщина',
//        self::SEX_MULTIPLE => 'Несколько человек',
    ];
    public const SEX_SWITCH_STATES = [
        'off' => ['value' => self::SEX_MALE, 'text' => self::SEX_OPTIONS[self::SEX_MALE], 'color' => 'primary'],
        'on' => ['value' => self::SEX_FEMALE, 'text' => self::SEX_OPTIONS[self::SEX_FEMALE], 'color' => 'success'],
    ];

    public const DAYS_TO_RECEIVE_HELP = 5;
    public const DAYS_REACHED_SIGN = '❗';
    public const HELP_RECEIVED_SIGN = '✅';
    public const HELP_REJECTED_SIGN = '🏅';

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
