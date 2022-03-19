<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Model
{
    use HasFactory;
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(VolunteerCategory::class);
    }
}
