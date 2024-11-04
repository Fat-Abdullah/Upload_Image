<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxName implements Rule
{
    public function passes($attribute, $value)
    {
        return strlen($value) === 5;
    }

    public function message()
    {
        return 'The :attribute must be exactly 5 letters.'; // الرسالة التي ستظهر عند الفشل
    }
}
