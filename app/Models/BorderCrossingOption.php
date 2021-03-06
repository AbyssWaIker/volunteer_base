<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BorderCrossingOption extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact', 'country', 'time_of_crossing', 'vacant_places', 'comment'];
}
