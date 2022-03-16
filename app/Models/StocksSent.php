<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StocksSent extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'quantity_unit_id', 'sending_id', 'quantity'];

    public function stock():BelongsTo
    {
        return $this->belongsTo(Stock::class);
    }
    public function quantityUnit():BelongsTo
    {
        return $this->belongsTo(QuantityUnit::class);
    }

//    public function stockString():Attribute
//    {
//        return new Attribute(
//            function () {
//                return $this->stock ? $this->stock->name : '';
//            },
//            function (string $value) {
//                $this->stock()->setModel(Stock::query()->firstOrCreate(['name' => $value]));
//            }
//        );
//    }
//
//    public function QuantityUnitString():Attribute
//    {
//        return new Attribute(
//            function () {
//                return $this->quantityUnit ? $this->quantityUnit->name : '';
//            },
//            function (string $value) {
//                $this->quantityUnit()->setModel(QuantityUnit::query()->firstOrCreate(['name' => $value]));
//            }
//        );
//    }
    public function sending():BelongsTo
    {
        return $this->belongsTo(Sending::class);
    }
}
