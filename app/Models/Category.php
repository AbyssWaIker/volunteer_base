<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Encore\Admin\Traits\ModelTree;
use Encore\Admin\Traits\AdminBuilder;

abstract class Category extends Model
{
    use HasFactory, ModelTree,AdminBuilder;
    protected $fillable = ['name','parent_id', 'order'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTitleColumn('name');
    }
}
