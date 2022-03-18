<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Sending extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['name'];


    public function receivingPoint():BelongsTo
    {
        return $this->belongsTo(ReceivingPoint::class);
    }
    public function stocksSent():HasMany
    {
        return $this->hasMany(StocksSent::class);
    }
    public function getReport():string
    {
        $title = mb_convert_case($this->receivingPoint->name,MB_CASE_TITLE_SIMPLE);
        $product_lines = $this->stocksSent->map(function (StocksSent $s):string{return $s->getLineForReport();})->toArray();
        return $title . PHP_EOL. implode(PHP_EOL, $product_lines);
    }
}
