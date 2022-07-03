<?php

namespace App\Admin\Actions\Destitute;
use App\Models\Attendance;

class CoverVolunteerAttendanceReject extends CoverVolunteerAttendance
{
    public $name = 'Волонтер отказался от помощи';

    public function html()
    {
        return Attendance::SIGNS_DAYS_COVERED[Attendance::STATUS_DAY_COVER_WAS_REJECTED];
    }
    protected const NEW_STATUS = Attendance::STATUS_DAY_COVER_WAS_REJECTED;
}
