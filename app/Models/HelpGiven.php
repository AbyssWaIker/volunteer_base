<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HelpGiven extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['hg_timestamp', 'granny_id'];
    public function granny():BelongsTo
    {
        return $this->belongsTo(Destitute::class);
    }
    public function stocks():BelongsToMany
    {
        return $this->belongsToMany(Stock::class);
    }
}
