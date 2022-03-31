<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use App\Models\VolunteerCategory;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeopleWithCategoriesExporter extends ExcelExporter implements WithMapping
{
    protected $fileName = 'волонтеры.xlsx';

    protected $columns = [
        'id' => '',
        'name' => 'фио',
        'phone' => 'Телефон',
        'comment' => 'Примечание',
        'categories' => 'Категории',
    ];
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
                'id' => '',
            ],
        );
    }

    public function __construct(Grid $grid = null, ?string $title)
    {
        parent::__construct($grid);
        if($title) {
            $this->fileName = $title . '.xlsx';
        }
    }
}
