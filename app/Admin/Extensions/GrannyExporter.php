<?php

namespace App\Admin\Extensions;

use App\Models\Granny;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class GrannyExporter extends ExcelExporter implements WithMapping
{
    protected $fileName = 'бабушки.xlsx';

    protected $columns = [
        'id' => 'id',
        'granny_name' => 'фио',
        'address' => 'Адрес',
        'granny_phone' => 'Телефон',
        'passport_id' => 'Пенсионный',
        'helpGiven' => 'получения',
    ];
    public function query()
    {
        return parent::query()->with('helpGiven');
    }

    public function map($row): array
    {
        return array_merge(
            $row->getAttributes(),
            ['helpGiven'=>Granny::getHelpHistory($row->helpGiven->toArray(), false),],
        );
    }
}
