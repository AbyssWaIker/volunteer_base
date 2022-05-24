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
}
