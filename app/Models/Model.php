<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Model extends \Illuminate\Database\Eloquent\Model
{
    // use Cachable;
    protected $appends = ['table_info'];
    protected $fillable = ['name'];
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
