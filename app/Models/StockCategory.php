<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function stocks():HasMany
    {
        return $this->hasMany(Stock::class);
    }

}
