<?php

namespace App\Admin\Extentions\Grid\Displayers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid\Displayers\AbstractDisplayer;

class HideOnMobile extends AbstractDisplayer
{
    public function display()
    {
        Admin::style(<<<CSS

@media (max-width: 767px)
{
    .column-{$this->getColumn()->getName()} {
        display: none;//жопа
    }
}

CSS
);
        return $this->getValue();
    }
}
