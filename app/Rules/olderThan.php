<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class olderThan implements Rule
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

    public function passes($attribute, $value)
    {
        //
    }
    public function message()
    {
        return 'The validation error message.';
    }
}
