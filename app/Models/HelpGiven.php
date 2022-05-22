<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Relation;

class HelpGiven extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['hg_timestamp', 'granny_id'];
    public function granny():BelongsTo
    {
        return $this->belongsTo(Destitute::class);
    }

    public function destitutes():BelongsToMany
    {
        return $this->belongsToMany(Destitute::class);
    }
    public function destitutesPivot():HasMany
    {
        return $this->hasMany(DestituteHelpGiven::class);
    }

    public function firstDestitute():Relation
    {
        return new Attribute(
            function () {return $this->destitutes()->first();},
            function (Destitute $destitute){
                $des = $this->destitutes()->firstOrCreate();
                foreach ($destitute->getAttributes() as $attribute) {
                    $des->$attribute = $destitute->$attribute;
                }
                $des->save();
            }
        );
    }
    public function getDestitutesCountAttribute():int
    {
        return $this->destitutes->count();
    }
}
