<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Model extends \Illuminate\Database\Eloquent\Model
{
    // use Cachable;
    protected $appends = ['table_info'];
<<<<<<< HEAD
=======
    protected $fillable = ['name'];
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
    static public function pluckNameAndID():array
    {
        return self::query()->pluck('name', 'id')->toArray();
    }

    public static function getTableTitles():array
    {
        $attributes = (new static)->getFillable();
        $result = [];
        foreach ($attributes as $attribute) {
            $result[$attribute] = __($attribute);
        }
        return $result;
    }

    public function getTableInfoAttribute():array
    {
        return $this->getAttributes();
    }
}
