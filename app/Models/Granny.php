<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Granny extends Model
{
    use HasFactory;
    protected $fillable = ['last_name','first_name','middle_name'.'address'.'passport_id',];
}
