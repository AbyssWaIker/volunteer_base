<?php

namespace App\Admin\Actions;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class GrannyGive extends RowAction
{
    public $name = 'Передать помощь бабушке';
    public function handle(Model $model)
    {
        $model->count +=1;
        $model->save();

        return $this->response()->success('Переданная помощь записана')->refresh();
    }
}
