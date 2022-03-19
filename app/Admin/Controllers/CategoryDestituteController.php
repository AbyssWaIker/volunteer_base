<?php

namespace App\Admin\Controllers;

use App\Models\DestituteCategory;
class CategoryDestituteController extends CategoryController
{
    protected $class = DestituteCategory::class;
    protected $title = 'Категории Нуждающихся';
}
