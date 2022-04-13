<?php

namespace App\Admin\Helpers;

use Encore\Admin\Grid\Model;
use Illuminate\Database\Eloquent\Collection;

class GridHelper
{
    protected static function getListTag($ordered = true):string
    {
        return $ordered ? 'ol' : 'ul';
    }
    public static function arrayToList(array $array, ?callable $extract = null, $ordered = true): string
    {
        $list_tag = self::getListTag($ordered);
        if(!$extract) {
            $extract = function ($value) {return $value;};
        }
        $list = implode('<br/>', array_map($extract, $array));
        return "<$list_tag> $list </$list_tag>";
    }

    public static function collectionToList(Collection $collection, ?callable $extract = null,$ordered = true): string
    {
        $list_tag = self::getListTag($ordered);
        if(!$extract) {
            $extract = function ($value) {return $value;};
        }
        $list = $collection->map($extract)->implode('<br/>');
        return "<$list_tag> $list </$list_tag>";
    }
}
