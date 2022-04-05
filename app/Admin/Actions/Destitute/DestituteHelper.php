<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use App\Models\Destitute;
use Carbon\Carbon;

class DestituteHelper extends RowAction
{
    public $name = 'Помочь нуждающемся';

    public function html()
    {
        return '<i class="fa fa-american-sign-language-interpreting"></i>';
    }
    public function handle(Destitute $model)
    {
        $model->helpGiven()->create(['hg_timestamp' => Carbon::now()]);
        return $this->response()->success('Переданная помощь записана')->refresh();
    }
}
