<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Granny extends Model
{
    use HasFactory;
    protected $fillable = ['granny_name', 'granny_phone', 'address', 'passport_id'];

    public function helpGiven():HasMany
    {
        return $this->hasMany(HelpGiven::class);
    }
}
