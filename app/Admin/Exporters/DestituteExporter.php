<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;

class DestituteExporter extends PeopleWithCategoriesExporter
{
    protected $fileName = 'нуждающиеся.xlsx';

    protected $columns = [
        'id' => '',
        'name' => 'фио',
        'phone' => 'Телефон',
        'comment' => 'Примечание',
        'passport_id' => 'Пасспорт/Пенсионный',
        'helpGiven' => 'получения',
        'categories' => 'Категории',
    ];
    public function query()
    {
        return parent::query()->with(['categories', 'HelpGiven']);
    }

    public function map($row): array
    {
        return [
            'id' => '',
            'name' => $row->name,
            'phone' => ' '.$row->phone . ' ',
            'comment' => $row->comment,
            'passport_id' => ' '.$row->passport_id . ' ',
            'helpGiven'=>Destitute::getHelpHistory($row->helpGiven->toArray(), false),
            'categories' => $row->categories->map(function ($category){return $category->name;})->implode(', '),
        ];
    }
}