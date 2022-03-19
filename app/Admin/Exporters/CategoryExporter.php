<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoryExporter extends ExcelExporter
{
    protected $fileName = 'категория.xlsx';

    protected $columns = [
        'id' => '',
        'name' => 'Категория',
    ];
    public function __construct(Grid $grid = null, $title = 'категория')
    {
        parent::__construct($grid);
        $this->fileName = $title.'.xlsx';
    }
}
