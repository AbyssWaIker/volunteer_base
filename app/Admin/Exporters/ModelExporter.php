<?php

namespace App\Admin\Exporters;

use App\Models\Model;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class ModelExporter extends ExcelExporter implements WithMapping
{
    protected $fileName = 'таблица.xlsx';

    public function __construct(Grid $grid = null, Model $class, string $title)
    {
        parent::__construct($grid);
        $this->columns = array_merge(['id' => 'id'], $class::getTableTitles());
        if($title) {
            $this->fileName = $title . '.xlsx';
        }
    }

    public function map($row): array
    {
        return array_merge(
            $row->getAttributes(),
            [
                'phone' => ' '.$row->phone . ' ',
            ],
        );
    }

}
