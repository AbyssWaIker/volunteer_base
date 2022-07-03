<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['attendance_day'];

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
    public static function attendanceToString(Collection $attendance):string
    {
        $divider = self::DAYS_OF_ATTENDANCE_TO_COVER;
        $separated_attendance = $attendance->groupby('status');

        $uncovered_count = $separated_attendance->has(self::STATUS_DAY_WASNT_COVERED) 
            ? $separated_attendance[self::STATUS_DAY_WASNT_COVERED]->count()
            : 0;
        $uncovered_new_count = $uncovered_count % $divider;

        $uncovered_old_count = $uncovered_count / $divider;
        $covered_count = $separated_attendance->has(self::STATUS_DAY_WAS_COVERED) 
            ? $separated_attendance[self::STATUS_DAY_WAS_COVERED]->count() / $divider
            : 0;
        $rejected_count =  $separated_attendance->has(self::STATUS_DAY_COVER_WAS_REJECTED) 
            ? $separated_attendance[self::STATUS_DAY_COVER_WAS_REJECTED]->count() / $divider
            : 0;

        $countToString = function(int $count, string $symbol){
            return implode(',', array_fill(0, $count, $symbol));
        };
        $signs = self::SIGNS_DAYS_COVERED;
        
        $uncovered_old_string = $countToString($uncovered_old_count, $signs[self::STATUS_DAY_WASNT_COVERED]);
        $covered_string = $countToString($covered_count, $signs[self::STATUS_DAY_WAS_COVERED]);
        $rejected_string =  $countToString($rejected_count, $signs[self::STATUS_DAY_COVER_WAS_REJECTED]);
        $final_strings =  [
            "$uncovered_new_count / $divider",
            $uncovered_old_string,
            $covered_string,
            $rejected_string,
        ];

        return implode(',', array_filter($final_strings));
    }
}
