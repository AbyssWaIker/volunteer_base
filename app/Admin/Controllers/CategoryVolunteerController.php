<?php

namespace App\Admin\Controllers;

use App\Models\VolunteerCategory;

class CategoryVolunteerController extends CategoryController
{
    protected $model = VolunteerCategory::class;
    protected $title = 'Volunteer Categories';
}
