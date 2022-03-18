<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class QuantityUnit extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function quantityUnit():BelongsToMany
    {
        return $this->belongsToMany(Stock::class);
    }
}
