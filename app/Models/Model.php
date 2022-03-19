<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use Cachable;
    static public function pluckNameAndID():array
    {
        return self::query()->pluck('name', 'id')->toArray();
    }
}
