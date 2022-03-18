<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StocksSent extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'quantity_unit_id', 'sending_id', 'quantity_sent','quantity_requested','deficit_status'];
    protected const DEFICIT_EXCLAMATION_MARK = '❗️';

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

    public function getLineForReport():string
    {
        return $this->stock->name . ' - '. $this->getQuantityStringForReport();

    }

    private function getQuantityStringForReport():string
    {
        $quantity_string = "$this->quantity_sent {$this->getExpectedQuantityForReport()} ({$this->quantityUnit->name}).";
        $emoji = self::DEFICIT_EXCLAMATION_MARK;
        switch ($this->deficit_status) {
            case Stock::DEFICIT_STATUS_NO_STOCK:
                $quantity_string = $this->quantity_sent || $this->quantity_requested ? $quantity_string : '';
                $no_in_stock = __('Not in stock');
                return trim("$emoji $quantity_string $no_in_stock $emoji");
            case Stock::DEFICIT_STATUS_STOCK_IS_LOW:
                return "$quantity_string $emoji";
            case Stock::DEFICIT_STATUS_NO_DEFICIT:
            default:
                return $quantity_string;
        }
    }
    private function getExpectedQuantityForReport():string
    {
        if(!$this->quantity_requested || $this->quantity_requested === $this->quantity_sent) {
            return '';
        }
        return "(\\{$this->quantity_requested})";
    }
}
