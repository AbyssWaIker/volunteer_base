<?php

namespace App\Admin\Exporters;

use App\Models\Destitute;
use App\Models\Person;
use Encore\Admin\Grid;

class DestituteExporter extends ModelExporter
{
    protected $fileName = 'нуждающиеся.xlsx';

    public function query()
    {
        return parent::query()->with(['categories', 'HelpGiven']);
    }

    public function map($row): array
    {
        return [
            'id' => $row->id,
            'reference_id'=>$row->reference_id,
            'name' => $row->name,
            'phone' => ' '.$row->phone . ' ',
            'address' => $row->address,
            'passport_id' => ' '.$row->passport_id . ' ',
            'id_code' => ' '.$row->id_code . ' ',
            'comment' => $row->comment,
            'familiy_members'=>$row->family_members_count . ' (' . __(':number of children'.['number'=>$row->children_count]). ')',
            'categories' => $row->categories->map(function ($category){return $category->name;})->implode(', '),
            'helpGiven'=>Destitute::getHelpHistory($row->helpGiven->toArray()),
        ];
    }
}
