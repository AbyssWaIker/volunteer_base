<?php


namespace App\Admin\Actions\DefaultActions;

use App\Admin\Actions\DefaultActions\RowAction;

class Edit extends RowAction
{
    public function html()
    {
        return '<abbr title="Изменить"><i class="fa fa-edit"></i></abbr>';
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}/edit";
    }
}
