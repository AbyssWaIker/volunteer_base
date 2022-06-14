<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFForMedicalLink extends PrintPDFLink
{
    public $name = 'Распечатать медицинский акт';
<<<<<<< HEAD
    protected $href_target = '_blank';
    protected $wrapper_class = 'print-for-med';
    protected $icon = 'fa-plus-square';
    protected function getRoute():string
    {
        return route(admin_get_route('print-pdf'), ['id'=>$this->getKey(), 'list'=>self::LIST_SKIP]);
    }
=======
    protected $wrapper_class = 'print-for-med';
    protected $icon = 'fa-plus-square';
    protected const DEFAULT_LIST_TYPE = self::LIST_SKIP;
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
}
