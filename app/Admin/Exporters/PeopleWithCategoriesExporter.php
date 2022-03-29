<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeopleWithCategoriesExporter extends ExcelExporter /*implements WithMapping*/
{
    protected $fileName = 'бабушки.xlsx';

    protected $columns = [
        'id' => '',
        'name' => 'фио',
        'phone' => 'Телефон',
        'categories' => 'Категории',
//        'passport_id' => 'Пенсионный',
//        'helpGiven' => 'получения',
    ];
    public function query()
    {
        return parent::query()->with('helpGiven');
    }

//    public function map($row): array
//    {
//        return array_merge(
//            $row->getAttributes(),
//            [
//                'helpGiven'=>Destitute::getHelpHistory($row->helpGiven->toArray(), false),
//                'id' => ''
//            ],
//        );
//    }
}
