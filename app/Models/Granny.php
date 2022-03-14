<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Granny extends Model
{
    use HasFactory;
    protected $fillable = ['granny_name', 'granny_phone', 'address', 'passport_id'];
    protected $appends = ['first_receiving'];
    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }
    protected static function boot()
    {
        parent::boot();
        parent::saved(function(self $granny) {
            $granny->helpGiven()->create();
        });
    }
    public function firstReceiving():Attribute
    {
        return Attribute::make(
            get: fn () => $this->helpGiven->sortBy('created_at')->first()->created_at->timestamp,
        );
    }
}
