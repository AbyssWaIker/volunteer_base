<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefugeeShelter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'terms', 'description', 'conditions',];
}
