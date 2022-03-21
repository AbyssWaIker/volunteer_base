<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'name', 'phone', 'volunteer'];
    public const SEX_MALE = 0;
    public const SEX_FEMALE = 1;
//    public const SEX_MULTIPLE = 2;
    public const SEX_SWITCH_STATES = [
        'on' => ['value' => self::SEX_MALE, 'text' => 'Мужчина', 'color' => 'primary'],
        'off' => ['value' => self::SEX_FEMALE, 'text' => 'Женщина', 'color' => 'success'],
    ];
    public const SEX_OPTIONS = [
        self::SEX_MALE => 'Мужчина',
        self::SEX_FEMALE => 'Женщина',
//        self::SEX_MULTIPLE => 'Несколько человек',
    ];
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(VolunteerCategory::class);
    }
}
