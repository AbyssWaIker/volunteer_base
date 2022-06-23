<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFForMedicalLink extends PrintPDFLink
{
    public $name = 'Распечатать медицинский акт';
    protected $wrapper_class = 'print-for-med';
    protected $icon = 'fa-plus-square';
    protected $default_list_type = self::LIST_SKIP;
}
