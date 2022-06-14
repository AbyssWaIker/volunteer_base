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
<<<<<<< HEAD
    public const SEX_SWITCH_STATES = [
        'off' => ['value' => self::SEX_MALE, 'text' => self::SEX_OPTIONS[self::SEX_MALE], 'color' => 'primary'],
        'on' => ['value' => self::SEX_FEMALE, 'text' => self::SEX_OPTIONS[self::SEX_FEMALE], 'color' => 'success'],
    ];
=======
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
    public const SEX_OPTIONS = [
        self::SEX_MALE => 'Мужчина',
        self::SEX_FEMALE => 'Женщина',
//        self::SEX_MULTIPLE => 'Несколько человек',
    ];
<<<<<<< HEAD
=======
    public const SEX_SWITCH_STATES = [
        'off' => ['value' => self::SEX_MALE, 'text' => self::SEX_OPTIONS[self::SEX_MALE], 'color' => 'primary'],
        'on' => ['value' => self::SEX_FEMALE, 'text' => self::SEX_OPTIONS[self::SEX_FEMALE], 'color' => 'success'],
    ];
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
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
