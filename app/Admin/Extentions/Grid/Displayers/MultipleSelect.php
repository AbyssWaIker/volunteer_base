<?php

namespace App\Admin\Extentions\Grid\Displayers;


use Encore\Admin\Facades\Admin;

class MultipleSelect extends \Encore\Admin\Grid\Displayers\MultipleSelect
{
    public function getValue()
    {
        $values = parent::getValue();
        return array_map(function ($value) {
            if(is_array($value) && key_exists('id', $value)) {
                //Сраная jquery сравнивает id-шку со строкой и дает false на "есть ли '5' в [5,2,1]?"
                return ''.$value['id'];
            }
            return $value;
        },$values);
    }
}
