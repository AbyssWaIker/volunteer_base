<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\CoverVolunteerAttendance;
use App\Admin\Actions\Destitute\CoverVolunteerAttendanceReject;
use App\Models\Attendance;
use App\Models\Volunteer;
use Encore\Admin\Grid;
use App\Admin\Actions\Actions;
use App\Admin\Actions\Destitute\WriteVolunteerAttendance;
use App\Admin\Exporters\VolunteerAttendanceExporter;
use Illuminate\Database\Eloquent\Builder;

class VolunteerAttendanceController extends VolunteerController
{
    protected $model = Volunteer::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Посещение';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid():Grid
    {
        $grid = parent::grid();
        $grid->model()->whereHas('attendance', function(Builder $query){
            $query->where('status', Attendance::STATUS_DAY_WASNT_COVERED);
        }, '>=', Attendance::DAYS_OF_ATTENDANCE_TO_COVER);
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->prepend(new CoverVolunteerAttendance);
            $actions->prepend(new CoverVolunteerAttendanceReject);
        });
        $grid->disableCreateButton();

        $grid->quickCreate(function(){});
        $grid->disableFilter();

        $grid->exporter(new VolunteerAttendanceExporter($grid, (new $this->model), $this->title));
        $grid->hideColumns(['phone', 'sex', 'comment']);
        return $grid;
    }

}
