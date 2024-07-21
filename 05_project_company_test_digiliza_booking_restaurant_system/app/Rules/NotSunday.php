<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotSunday implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $date = \DateTime::createFromFormat('Y-m-d', $value);
        $dayOfWeek = $date->format('w');
        
        return $dayOfWeek !== '0';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Sunday is not a valid booking day.';
    }
}
