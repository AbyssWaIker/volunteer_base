<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFForMedicalLink extends PrintPDFLink
{
    public $name = 'Распечатать медицинский акт';
    protected $href_target = '_blank';
    protected $wrapper_class = 'print-for-med';
    protected $icon = 'fa-plus-square';
    protected function getRoute():string
    {
        return route(admin_get_route('print-pdf'), ['id'=>$this->getKey(), 'skip_list'=>'skip_list']);
    }
}
