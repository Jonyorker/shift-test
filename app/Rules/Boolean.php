<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Boolean implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $acceptable = [true, false, 0, 1, '0', '1', 'true', 'false', 'True', 'False'];
        if (! in_array($value, $acceptable)) {
            $fail('The :attribute must be a boolean.');
        }
    }
}
