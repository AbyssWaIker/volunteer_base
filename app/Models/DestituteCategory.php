<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DestituteCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;

    public function destitutes():BelongsToMany
    {
        return $this->belongsToMany(Destitute::class);
    }
}
