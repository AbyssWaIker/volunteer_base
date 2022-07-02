<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DestituteCategory extends Category
{
    public $timestamps = false;

    public function destitutes():BelongsToMany
    {
        return $this->belongsToMany(Destitute::class);
    }
}
