<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StocksSent extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'quantity_unit_id', 'sending_id', 'quantity','deficit_status'];

    public function stock():BelongsTo
    {
        return $this->belongsTo(Stock::class);
    }
    public function quantityUnit():BelongsTo
    {
        return $this->belongsTo(QuantityUnit::class);
    }
    public function sending():BelongsTo
    {
        return $this->belongsTo(Sending::class);
    }
}
