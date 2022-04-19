<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Destitute;

class UniquenesForDestitute implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(!$value) {
            return true;
        }
        if(Destitute::query()->whereNotNull($attribute)->firstWhere($attribute, $value)){
            return false;
        }
        $families = Destitute::query()->whereNotNull('family_members')->pluck('family_members');
        foreach($families as $family) {
            if(!$family) {
                continue;
            }
            foreach($family as $member) {
                if(@$member[$attribute] == $value) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __(':attribute is Taken');
    }
}
