<?php


namespace App\Admin\Actions\DefaultActions;

use App\Admin\Actions\DefaultActions\RowAction;

class Show extends RowAction
{
    public function html()
    {
        return '<abbr title="Показать"><i class="fa fa-eye"></i></abbr>';
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}";
    }
}
