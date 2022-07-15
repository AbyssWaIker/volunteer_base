<?php

namespace App\Models;

use App\Admin\Scopes\VolunteersForRoleScope;
use Carbon\Carbon;
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

    public function lastWeekAttendance():HasMany
    {
        return $this->attendance()
            ->where('attendance_day', '>=', Carbon::now()->subWeek()->startOfWeek())
            ->where('attendance_day', '<=', Carbon::now()->subWeek()->endOfWeek());
    }
    protected $attendance_cache = [];
    protected function updateAttendanceCache()
    {
        $this->attendance_cache = $this->attendance()
            ->where('attendance_day', '>=', Carbon::now()->subWeek()->startOfWeek())
            ->pluck('attendance_day');
    }
    protected function clearAttendanceCache()
    {
        $this->attendance_cache = [];
    }
    protected function getDayAttendance(Carbon $day):bool
    {
        if(!$this->attendance_cache) {
            $this->updateAttendanceCache();
        }
        return (bool) in_array($day->toDateString(), $this->attendance_cache);
    }
    protected function setDayAttendance(Carbon $day, bool $attended)
    {
        if($attended) {
            $result = $this->attendance()->firstOrCreate(['attendance_day' => $day->toDateString()]);
        } else {
            $result = $this->attendance()->where('attendance_day', $day->toDateString())->delete();
        }
        if($result) {
            $this->clearAttendanceCache();
        }
        return $result;
    }
    // public function __construct()
    // {
        // parent::__construct();
        // static::addGlobalScope(new VolunteersForRoleScope);
        //АААААААААААААА.
        //Из-за того что это не работает, мне придется делать самый уродливый копипастный код(((
        // $this->getTodayAttendanceAttribute = function():bool
        // {
            // return $this->getDayAttendance(Carbon::today());
        // };
        // $this->setTodayAttendanceAttribute = function(bool $attended) {
            // return $this->setDayAttendance(Carbon::today(), $attended);
        // }
    // }
    ///БЛИИИИИИИИИИИИН!!!!! ЭТО ТОЖЕ НЕ РАБОТАЕТ!!!!!!
    protected const DAYS_OF_WEEK = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
    ];
    // public static function boot()
    // {
    //     parent::boot();

    //     //last week
    //     foreach(self::DAYS_OF_WEEK as $day) {
    //         runkit7_method_add(
    //             static::class,
    //             "getLast{$day}Attribute",
    //             '',
    //             'return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next('.$day.'))',
    //             RUNKIT7_ACC_PUBLIC,
    //             null,
    //             'bool'
    //         );
    //     }
    //     //this week
    //     foreach(self::DAYS_OF_WEEK as $day) {
    //         $day = ucfirst($day);
    //         runkit7_method_add(
    //             static::class,
    //             "getThis{$day}Attribute",
    //             '',
    //             'return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next('.$day.'))',
    //             RUNKIT7_ACC_PUBLIC,
    //             null,
    //             'bool'
    //         );
    //     }
    // }
    public const LAST_WEEK_DAYS = [
        'last_monday',
        'last_tuesday',
        'last_wednesday',
        'last_thursday',
        'last_friday',
    ];
    public const THIS_WEEK_DAYS = [
        'this_monday',
        'this_tuesday',
        'this_wednesday',
        'this_thursday',
        'this_friday',
    ];
    public $public_appends = [];
    protected $appends  = [];
    public function __construct()
    {
        parent::__construct();
        static::addGlobalScope(new VolunteersForRoleScope);
        $this->public_appends = array_merge(self::LAST_WEEK_DAYS,self::THIS_WEEK_DAYS, ['last_week_count', 'this_week_count']);
        $this->appends = $this->public_appends;
    }

    public function getLastWeekCountAttribute():int
    {
        return array_sum(array_map(function($day):bool{return $this->$day;},self::LAST_WEEK_DAYS));
    }
    public function getThisWeekCountAttribute():int
    {
        return array_sum(array_map(function($day):bool{return $this->$day;},self::THIS_WEEK_DAYS));
    }
    // protected function scriptToAutomaticallyGenerateThisMess()
    // {
    //     echo '<pre>';
    //     //last week
    //     foreach(self::DAYS_OF_WEEK as $day){
    //         echo "public function getLast{$day}Attribute():bool"
    //            .PHP_EOL.'{'.PHP_EOL.
    //            '    return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("'.$day.'"));'
    //            .PHP_EOL.'}'.PHP_EOL;

    //         echo "public function setLast{$day}Attribute(bool \$attended):bool"
    //            .PHP_EOL.'{'.PHP_EOL.
    //            '    return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("'.$day.'"), $attended);'
    //            .PHP_EOL.'}'.PHP_EOL;
    //     }

    //     //this week
    //     foreach(self::DAYS_OF_WEEK as $day){
    //         echo "public function getThis{$day}Attribute():bool"
    //            .PHP_EOL.'{'.PHP_EOL.
    //            '    return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("'.$day.'"));'
    //            .PHP_EOL.'}'.PHP_EOL;

    //         echo "public function setThis{$day}Attribute(bool \$attended):bool"
    //            .PHP_EOL.'{'.PHP_EOL.
    //            '    return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("'.$day.'"), $attended);'
    //            .PHP_EOL.'}'.PHP_EOL;
    //     }
    //     echo '</pre>';
    // }

    //Mess generated with the script
    public function getLastMondayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Monday"));
    }
    public function setLastMondayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Monday"), $attended);
    }
    public function getLastTuesdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Tuesday"));
    }
    public function setLastTuesdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Tuesday"), $attended);
    }
    public function getLastWednesdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Wednesday"));
    }
    public function setLastWednesdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Wednesday"), $attended);
    }
    public function getLastThursdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Thursday"));
    }
    public function setLastThursdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Thursday"), $attended);
    }
    public function getLastFridayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Friday"));
    }
    public function setLastFridayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->subWeek()->startOfWeek()->subSecond()->next("Friday"), $attended);
    }
    public function getThisMondayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Monday"));
    }
    public function setThisMondayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Monday"), $attended);
    }
    public function getThisTuesdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Tuesday"));
    }
    public function setThisTuesdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Tuesday"), $attended);
    }
    public function getThisWednesdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Wednesday"));
    }
    public function setThisWednesdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Wednesday"), $attended);
    }
    public function getThisThursdayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Thursday"));
    }
    public function setThisThursdayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Thursday"), $attended);
    }
    public function getThisFridayAttribute():bool
    {
        return $this->getDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Friday"));
    }
    public function setThisFridayAttribute(bool $attended):bool
    {
        return $this->setDayAttendance(Carbon::today()->startOfWeek()->subSecond()->next("Friday"), $attended);
    }

}
