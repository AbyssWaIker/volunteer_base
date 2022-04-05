<?php

namespace App\Admin\Extentions\Grid\Displayers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid\Displayers\AbstractDisplayer;

class HideOnDesktop extends AbstractDisplayer
{
    public function display()
    {
        Admin::style(<<<CSS
@media (min-width: 767px)
{
    .column-{$this->getColumn()->getName()} {
        display: none;
    }
}
CSS
);
        return $this->getValue();
    }
}
