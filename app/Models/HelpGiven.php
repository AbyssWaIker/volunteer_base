<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HelpGiven extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['hg_timestamp', 'granny_id'];
    public function granny():BelongsTo
    {
        return $this->belongsTo(Granny::class);
    }
}
