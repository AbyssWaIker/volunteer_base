<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sending extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function receivingPoint():BelongsTo
    {
        return $this->belongsTo(ReceivingPoint::class);
    }
//    public function receivingPointString():Attribute
//    {
//        return Attribute::make(
//            function () {
//                return $this->receivingPoint ?$this->receivingPoint->name: 'hfp ldf nhb hfp ldf nhb hfp ldf nhb hfp';
//            },
//            function(string $value){
//                $this->receivingPoint()->setModel(ReceivingPoint::query()->firstOrCreate(['name' => $value]));
//            }
//        );
//    }
    public function getReceivingPointStringAttribute() {
        return $this->receivingPoint ?$this->receivingPoint->name: 'hfp ldf nhb hfp ldf nhb hfp ldf nhb hfp';
    }

    public function setReceivingPointStringAttribute(string $value) {

        $this->receivingPoint()->setModel(ReceivingPoint::query()->firstOrCreate(['name' => $value]));
    }

    public function stocksSent():HasMany
    {
        return $this->hasMany(StocksSent::class);
    }
}
