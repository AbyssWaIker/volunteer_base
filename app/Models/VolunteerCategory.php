<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VolunteerCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function volunteers():BelongsToMany
    {
        return $this->belongsToMany(Volunteer::class);
    }
}
