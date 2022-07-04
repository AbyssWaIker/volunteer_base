<?php

namespace App\Models;

use App\Admin\Scopes\VolunteerCategoriesForRoleScope;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VolunteerCategory extends Category
{
    public function volunteers():BelongsToMany
    {
        return $this->belongsToMany(Volunteer::class);
    }
    public function __construct()
    {
        parent::__construct();
        static::addGlobalScope(new VolunteerCategoriesForRoleScope);
    }
    public static function withAllChildrenIds($category_id):array
    {
        if(!$category_id) {
            return [];
        }

        $children = static::query()
            ->withoutGlobalScope(new VolunteerCategoriesForRoleScope)
            ->where('parent_id', $category_id)
            ->pluck('id');
        
        return $children->push($category_id)->toArray();
    }
}
