<?php

namespace App\Admin\Controllers;

use App\Models\DestituteCategory;
class CategoryDestituteController extends CategoryController
{
    protected $model = DestituteCategory::class;
    protected $title = 'Категории Нуждающихся';
}
