<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReceivingPoint extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function sendings():hasMany
    {
        return $this->hasMany(Sending::class);
    }
}
