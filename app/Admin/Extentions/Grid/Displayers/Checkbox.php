<?php

namespace App\Admin\Extentions\Grid\Displayers;

use Encore\Admin\Grid\Displayers\Checkbox as BaseCheckBox;
class Checkbox extends BaseCheckBox
{
    public function getValue()
    {
        $value = parent::getValue();
        foreach ($value as &$item) {
            if(is_array($item) && key_exists('id', $item)) {
                //Сраная jquery сравнивает id-шку со строкой и дает false на "есть ли '5' в [5,2,1]?"
                return ''.$item['id'];
            }
        }
        return $value;
    }
}
