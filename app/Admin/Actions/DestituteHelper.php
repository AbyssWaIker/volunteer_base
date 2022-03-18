<?php

namespace App\Admin\Actions;
use App\Models\Destitute;
use Carbon\Carbon;
use Encore\Admin\Actions\RowAction;

class DestituteHelper extends RowAction
{
    public $name = 'Помочь нуждающемся';
    public function handle(Destitute $model)
    {
        $model->helpGiven()->create(['hg_timestamp' => Carbon::now()]);
        return $this->response()->success('Переданная помощь записана')->refresh();
    }
}
