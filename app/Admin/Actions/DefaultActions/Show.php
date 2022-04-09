<?php


namespace App\Admin\Actions\DefaultActions;

use App\Admin\Actions\DefaultActions\RowAction;

class Show extends RowAction
{
    public $name = 'Показать';
    public function html()
    {
        return '<i class="fa fa-eye"></i>';
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}";
    }
}
