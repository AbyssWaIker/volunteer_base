<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['attendance'];

    public const DAYS_OF_ATTENDANCE_TO_COVER = 5;
    
    public const STATUS_DAY_WASNT_COVERED = 0;
    public const STATUS_DAY_WAS_COVERED = 1;
    public const STATUS_DAY_COVER_WAS_REJECTED = 2;
    public const SIGNS_DAYS_COVERED = [
        self::STATUS_DAY_WASNT_COVERED => '❗',
        self::STATUS_DAY_WAS_COVERED => '✅',
        self::STATUS_DAY_COVER_WAS_REJECTED => '🥇',
    ];
    public function Volunteer():BelongsTo
    {
        return $this->belongsTo(Volunteer::class);
    }
}
