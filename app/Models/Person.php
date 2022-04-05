<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

abstract class Person extends Model
{
    use HasFactory;
    protected $categoryClass;
    protected $fillable = ['comment', 'name', 'phone'];
    public static function getTableTitles():array
    {
        return ['name'=>__('Full Name'), 'phone'=>__('Phone'), 'comment' =>__('Comment')];
    }
    public function getTableInfoAttribute():array
    {
        return $this->getAttributes();
    }

    public function categories():BelongsToMany
    {
        return $this->belongsToMany($this->categoryClass);
    }
}
