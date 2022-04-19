<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;

class DestitutePDF extends RowAction
{
    public $name = 'В PDF';
    protected $href_target = '_blank';

    public function html()
    {
        return '<i class="fa fa-print"></i>';
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}/print-pdf";
    }
}
