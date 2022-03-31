<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use App\Models\VolunteerCategory;
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
//        'passport_id' => 'Пасспорт/Пенсионный',
//        'helpGiven' => 'получения',
    ];
    public function query()
    {
        return parent::query()->with(['categories', /*'HelpGiven'*/]);
    }

    public function map($row): array
    {
        return array_merge(
            $row->getAttributes(),
            [
//                'helpGiven'=>Destitute::getHelpHistory($row->helpGiven->toArray(), false),
                'categories' => $row->categories->map(function ($category){return $category->name;})->implode(', '),
                'phone' => ' '.$row->phone . ' ',
                'id' => '',
            ],
        );
    }
}
