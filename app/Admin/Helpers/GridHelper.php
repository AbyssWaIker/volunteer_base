<?php

namespace App\Admin\Helpers;

use Illuminate\Database\Eloquent\Collection;

class GridHelper
{
    protected static function getListTag($ordered = true):string
    {
        return $ordered ? 'ol' : 'ul';
    }
    /**
     * @param array|Collection $array
     * @param ?callable $extract
     * @param bool $ordered
     * @return string
     */
    public static function arrayToList($array, ?callable $extract = null, bool $ordered = true): string
    {
        $list_tag = self::getListTag($ordered);
        if(!$extract) {
            $extract = function ($value) {return $value;};
        }
        if($array instanceof Collection) {
            $list = $array->map($extract)->implode('<br/>');
        } else {
            $list = implode('<br/>', array_map($extract, $array));
        }
        return "<$list_tag> $list </$list_tag>";
    }
}
