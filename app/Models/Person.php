<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

abstract class Person extends Model
{
    use HasFactory;
    public $category_class;
    protected $fillable = ['comment', 'name', 'phone'];
    protected $appends = ['table_info'];
    public static function getTableTitles():array
    {
        return [
            'name'=>__('Full Name'),
            'phone'=>__('Phone'),
            'comment' =>__('Comment'),
            'categories'=>__('Category'),
        ];
    }

    public function getTableInfoAttribute():array
    {
        return array_merge(
            $this->getAttributes(),
            ['categories'=> $this->categories->implode('name', ", <br/>")]
        );
    }

    public function categories():BelongsToMany
    {
        return $this->belongsToMany($this->category_class);
    }
}
