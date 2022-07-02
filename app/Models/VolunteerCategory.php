<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VolunteerCategory extends Category
{
    public function volunteers():BelongsToMany
    {
        return $this->belongsToMany(Volunteer::class);
    }
}
