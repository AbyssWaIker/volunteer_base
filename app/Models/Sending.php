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
    protected const DEFICIT_EXCLAMATION_MARK = '❗️';


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
        $message = mb_convert_case($this->receivingPoint->name,MB_CASE_TITLE_SIMPLE) . PHP_EOL;
        $sentStocks = $this->stocksSent;
        foreach ($sentStocks as $sentStock) {
            $line = $sentStock->stock->name . ' - ';

            $not_in_stock = $sentStock->stock->deficit_status === Stock::DEFICIT_STATUS_NO_STOCK;
            if(!$not_in_stock) {
                return $line . self::DEFICIT_EXCLAMATION_MARK . ' нет ' . self::DEFICIT_EXCLAMATION_MARK;
            }

            $deficit_postfix = $sentStock->deficit_status ? self::DEFICIT_EXCLAMATION_MARK : '';
            $line .= "$sentStock->quantity  ({$sentStock->quantityUnit->name}) $deficit_postfix";
            $message .= $line . PHP_EOL;
        }
        return  $message;
    }
}
