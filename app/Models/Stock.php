<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    use HasFactory;
    public const DEFICIT_STATUS_NO_DEFICIT = 0;
    public const DEFICIT_STATUS_STOCK_IS_LOW = 1;
    public const DEFICIT_STATUS_NO_STOCK = 2;
    public const DEFICIT_STATUS_OPTIONS = [
        Stock::DEFICIT_STATUS_NO_DEFICIT => 'В наличии',
        Stock::DEFICIT_STATUS_STOCK_IS_LOW => 'Дефицит',
        Stock::DEFICIT_STATUS_NO_STOCK => 'Отсутствие',
    ];
    protected $fillable = ['name'];

    public function category():BelongsTo
    {
        return $this->belongsTo(StockCategory::class);
    }

    public function quantityUnit():BelongsToMany
    {
        return $this->belongsToMany(QuantityUnit::class);
    }
    public function sentStocks():HasMany
    {
        return $this->hasMany(StocksSent::class);
    }
}
