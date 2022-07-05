<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Encore\Admin\Traits\ModelTree;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Builder;

abstract class Category extends Model
{
    use HasFactory, ModelTree,AdminBuilder;
    protected $fillable = ['name','parent_id', 'order'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTitleColumn('name');
    }
    public static function withAllChildrenIds($category_id):array
    {
        if(!$category_id) {
            return [];
        }

        $children = self::query()->where('parent_id', $category_id)->pluck('id');
        
        return $children->push($category_id)->toArray();
    }
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $category_id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory(Builder $query, $category_id,bool $in = true)
    {
        if(!$category_id) {
            return $query;
        }

        $categories = static::withAllChildrenIds($category_id);
        if(!count($categories)) {
            return $query;
        }
        if(!$in) {
            $query->whereNotIn("id", $categories);
            return;
        }
        $query->whereIn("id", $categories);
    }

}
