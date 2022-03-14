<?php

namespace App\Admin\Helpers;

use Encore\Admin\Grid\Model;

class FilterHelper
{
    public static function quickCaseInsensitiveSearch(array | string $search_by): \Closure
    {
        if(is_string($search_by)) {
            $search_by = [$search_by];
        }
        return function(Model $builder, string $query) use ($search_by) {
            $table = $builder->getTable();
            foreach ($search_by as $index => $item) {
                $sql = <<<SQL
LOWER($item) like "%?%" 
SQL;
                $boolean = $index ? 'OR' : 'AND';
                $builder->whereRaw($sql, mb_strtolower($query), $boolean);
            }
        };
    }
}