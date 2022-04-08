<?php

namespace App\Admin\Exporters;

use App\Models\Volunteer;
use Maatwebsite\Excel\Concerns\WithMapping;

class VolunteerExporter extends PeopleWithCategoriesExporter implements WithMapping
{
    protected $fileName = 'волонтеры.xlsx';

    public function map($row): array
    {
        return array_merge(
            parent::map($row),
            [
                'sex' => Volunteer::SEX_OPTIONS[$row->sex],
            ],
        );
    }

}
