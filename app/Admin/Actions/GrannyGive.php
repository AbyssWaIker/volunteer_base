<?php

namespace App\Admin\Actions;
use App\Models\Destitute;
use Carbon\Carbon;
use Encore\Admin\Actions\RowAction;

class GrannyGive extends RowAction
{
    public $name = 'Помочь бабушке';
    public function handle(Destitute $model)
    {
        $model->helpGiven()->create(['hg_timestamp' => Carbon::now()]);
        return $this->response()->success('Переданная помощь записана')->refresh();
    }
}
