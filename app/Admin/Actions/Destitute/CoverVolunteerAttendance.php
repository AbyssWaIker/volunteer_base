<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use App\Models\Attendance;
use App\Models\Volunteer;

class CoverVolunteerAttendance extends RowAction
{
    public $name = 'Волонтер принял помощь';

    public function html()
    {
        return Attendance::SIGNS_DAYS_COVERED[Attendance::STATUS_DAY_WAS_COVERED];
    }
    protected const NEW_STATUS = Attendance::STATUS_DAY_WAS_COVERED;
    public function handle(Volunteer $model)
    {
        $days = $model->attendance()
            ->where('status', Attendance::STATUS_DAY_WASNT_COVERED)
            ->orderBy('attendance_day')
            ->paginate(Attendance::DAYS_OF_ATTENDANCE_TO_COVER);

        foreach ($days as $key => $day) {
            $day->status = static::NEW_STATUS;
            $day->save();
        }
        return $this->response()->success('Выдача помощи волонтера записана')->refresh();
    }
}
