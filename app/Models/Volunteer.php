<?php

namespace App\Models;

use App\Admin\Scopes\VolunteersForRoleScope;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function getTableInfoAttribute(): array
    {
        return array_merge(
            parent::getTableInfoAttribute(),
            [
                'sex' => self::SEX_OPTIONS[(bool)$this->sex]
            ]
        );
    }
    public function attendance():HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function __construct()
    {
        parent::__construct();
        static::addGlobalScope(new VolunteersForRoleScope);
    }
}
