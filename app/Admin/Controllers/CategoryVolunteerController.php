<?php

namespace App\Admin\Controllers;

use App\Models\VolunteerCategory;

class CategoryVolunteerController extends CategoryController
{
    protected $class = VolunteerCategory::class;
    protected $title = 'Категории волонтеров';
}
