<?php

namespace App\Admin\Controllers;

use App\Models\StockCategory;

class CategoryStockController extends CategoryController
{
    protected $class = StockCategory::class;
    protected $title = 'Категории запасов';
}
