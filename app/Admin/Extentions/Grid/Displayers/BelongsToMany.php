<?php

namespace App\Admin\Extentions\Grid\Displayers;

class BelongsToMany extends \Encore\Admin\Extentions\Grid\Displayers\BelongsToMany
{
    public function getValue()
    {
        return implode(',',parent::getValue());
    }
}
