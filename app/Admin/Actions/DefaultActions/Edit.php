<?php


namespace App\Admin\Actions\DefaultActions;

use App\Admin\Actions\DefaultActions\RowAction;

class Edit extends RowAction
{
    public $name = 'Изменить';
    public function html()
    {
        return '<i class="fa fa-edit"></i>';
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}/edit";
    }
}
