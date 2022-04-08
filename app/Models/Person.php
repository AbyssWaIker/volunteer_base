<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
