<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use App\Models\Person;
use App\Models\VolunteerCategory;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeopleWithCategoriesExporter extends ModelExporter implements WithMapping
{
    protected $fileName = 'волонтеры.xlsx';

    public function query()
    {
        return parent::query()->with(['categories']);
    }

    public function map($row): array
    {
        return array_merge(
            $row->getAttributes(),
            [
                'categories' => $row->categories->map(function ($category){return $category->name;})->implode(', '),
                'phone' => ' '.$row->phone . ' ',
            ],
        );
    }

}
