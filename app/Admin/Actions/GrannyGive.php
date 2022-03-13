<?php

namespace App\Admin\Actions;
use App\Models\Granny;
use Encore\Admin\Actions\RowAction;

class GrannyGive extends RowAction
{
    public $name = 'Передать помощь бабушке';
    public function handle(Granny $model)
    {
        $model->helpGiven()->create();
        return $this->response()->success('Переданная помощь записана')->refresh();
    }
}