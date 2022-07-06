<?php
 
namespace App\Admin\Scopes;

use App\Models\Category;
use App\Models\VolunteerCategory;
use Encore\Admin\Facades\Admin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
 
class VolunteerCategoriesForRoleScope implements Scope
{
    protected $user_roles_cache;
    protected const CLASSES_WITHOUT_RESTRICTION = ['administrator', 'office', 'reception'];
    protected const CLASSES_WITH_RESTRICTIONS = [
        'medicine' => 30,
        'hygiene' => 29,
        'products' => 33,
        'kitchen' => 2,
        'clothes' => 3,
        'drivers' => 28,

    ];
    public const VOLUNTEER_WITHOUT_CATEGORY = 1;
    public function __construct()
    {
        $this->user_roles_cache = Admin::user()->roles->pluck('slug')->toArray();
    }
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if(Admin::user()->inRoles(self::CLASSES_WITHOUT_RESTRICTION)) {
            return;
        }
        if(Admin::user()->inRoles(array_keys(self::CLASSES_WITH_RESTRICTIONS))) {
            $roles = $this->user_roles_cache;
            $category_ids = [];
            foreach ($roles as $key => $role) {
                $category_ids = array_merge($category_ids, VolunteerCategory::withAllChildrenIds(self::CLASSES_WITH_RESTRICTIONS[$role]));
            }
            $category_ids = array_merge($category_ids, VolunteerCategory::withAllChildrenIds(self::VOLUNTEER_WITHOUT_CATEGORY));
            $this->callBackToApply($builder,$model, $category_ids);
        }
    }
    protected function callBackToApply(Builder $builder, Model $model, array $category_ids)
    {
        $table = $model->getTable();
        $builder->whereIn("$table.id", $category_ids);
    }
}