<?php

namespace App\Admin\Exporters;

use App\Models\Model;
use App\Models\Volunteer;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class VolunteerAttendanceExporter extends ModelExporter implements WithMapping
{
    protected $fileName = 'посещение.xlsx';
    public function __construct(Grid $grid = null, Model $class, string $title)
    {
        parent::__construct($grid, $class, $title);
        $this->columns = ['id' => __('id'), 'categories' => __('categories'), 'name' => __('name')];
    }
    public function query()
    {
        return parent::query()->with(['categories']);
    }
    public function map($row): array
    {
        return [
                'id'=>$row->id,
                'categories'=>$row->categories->implode('name'),
                'name' => $row->name,
        ];
    }

}
