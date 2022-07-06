<?php
 
namespace App\Admin\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
 
class VolunteersForRoleScope extends VolunteerCategoriesForRoleScope
{
    protected function callBackToApply(Builder $builder, Model $model, array $category_ids)
    {
        // $table = $model->getTable();
        $builder->whereHas('categories', /*function (Builder $query) use ($table, $category_ids) {
            // $query->whereIn("$table.id", $category_ids);
        }*/);
    }
}