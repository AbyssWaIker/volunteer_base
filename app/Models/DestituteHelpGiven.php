<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Relation;

class DestituteHelpGiven extends Model
{
    protected $table = 'destitute_help_given';
    protected $fillable = ['destitute'];
    use HasFactory;
    public function destitute():BelongsTo
    {
        return $this->belongsTo(Destitute::class);
    }
    public function helpGiven():BelongsTo
    {
        return $this->belongsTo(HelpGiven::class);
    }
}
