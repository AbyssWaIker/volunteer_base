<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use App\Models\Volunteer;
use Carbon\Carbon;

class WriteVolunteerAttendance extends RowAction
{
    public $name = 'Учесть, что волонтер пришел на сегодняшнию смену';

    public function html()
    {
        return '<i class="fa fa-calendar"></i>';
    }
    public function handle(Volunteer $model)
    {
        $model->attendance()->create(['attendance' => Carbon::now()]);
        return $this->response()->success('Смена волонтера записана')->refresh();
    }
}
