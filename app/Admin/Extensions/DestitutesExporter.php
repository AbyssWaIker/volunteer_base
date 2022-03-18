<?php

namespace App\Admin\Extensions;

use App\Models\Destitute;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class DestitutesExporter extends ExcelExporter implements WithMapping
{
    protected $fileName = 'бабушки.xlsx';

    protected $columns = [
        'id' => 'id',
        'name' => 'фио',
        'address' => 'Адрес',
        'phone' => 'Телефон',
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
            ['helpGiven'=>Destitute::getHelpHistory($row->helpGiven->toArray(), false),],
        );
    }
}
