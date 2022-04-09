<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class RefugeeShelter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'terms', 'description', 'conditions',];
}
