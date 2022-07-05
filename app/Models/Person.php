<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Arr;

abstract class Person extends Model
{
    use HasFactory;
    public $category_class;
    protected $fillable = ['comment', 'name', 'phone'];
    public static function getTableTitles():array
    {
        return array_merge(
            parent::getTableTitles(),
            ['categories'=>__('categories'),]
        );
    }
    public function getTableInfoAttribute():array
    {
        return array_merge(
            parent::getTableInfoAttribute(),
            ['categories'=> $this->categories->implode('name', ", <br/>")]
        );
    }

    public function categories():BelongsToMany
    {
        return $this->belongsToMany($this->category_class);
    }
    public function withAllChildrenIds($category_id):array
    {
        if(!$category_id) {
            return [];
        }
        $children = ($this->category_class)::query()->where('parent_id', $category_id)->pluck('id');
        
        return $children->push($category_id)->toArray();
    }
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $category_id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $category_id, bool $in = true)
    {
        if(!$category_id) {
            return $query;
        }
        $category_class = (new $this->category_class);
        $table = $category_class->getTable();

        $categories = $category_class::withAllChildrenIds($category_id);
        if(!count($categories)) {
            return $query;
        }
        return $query->whereHas('categories', function (Builder $query) use ($table, $categories, $in) {
            if($in){
                $query->whereIn("$table.id", $categories);
            } else {
                
                $query->whereNotIn("$table.id", $categories);
            }
        });;
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array  $category_ids
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategories($query, $category_ids)
    {
        if(!count($category_ids)) {
            return $query;
        }
        $table = (new $this->category_class)->getTable();
        
        $categories = array_merge(...array_map(function(int $category_id):array {
            return $this->withAllChildrenIds((int)$category_id);
        }, $category_ids));
        if(!count($categories)) {
            return $query;
        }
        return $query->whereHas('categories', function (Builder $query) use ($table, $categories) {
            $query->whereIn("$table.id", $categories);
        });
    }
}
