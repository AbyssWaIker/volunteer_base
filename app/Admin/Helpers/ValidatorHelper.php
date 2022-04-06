<?php

namespace App\Admin\Helpers;

class ValidatorHelper
{
    public static function validatorUnique(string $table,?string $column =null, $id = 0, bool $nullable = true):string
    {
        $nullable = $nullable ? 'nullable|sometimes|' : '';
        if($column) {
            $column = ','.$column;
        }
        if($id) {
            $id=','.$id;
        }
        return $nullable.'unique:'.$table.$column.$id;

    }
}
