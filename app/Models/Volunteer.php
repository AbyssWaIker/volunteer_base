<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'name', 'phone', 'volunteer'];
    public const SEX_MALE = 1;
    public const SEX_FEMALE = 2;
    public const SEX_MULTIPLE = 3;
    public const SEX_OPTIONS = [
        self::SEX_MALE => 'Мужчина',
        self::SEX_FEMALE => 'Женщина',
        self::SEX_MULTIPLE => 'Несколько человек',
    ];
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(VolunteerCategory::class);
    }
}
