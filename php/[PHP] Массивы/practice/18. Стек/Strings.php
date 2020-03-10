<?php

namespace App\Strings;

/*
	Реализуйте функцию `checkIfBalanced`, которая проверяет балансировку круглых скобок в арифметических выражениях.
*/

// BEGIN (write your solution here)
function checkIfBalanced(string $expression): bool
{
    $stack = [];
    $pairs = ['()'];

    for ($i = 0; $i < strlen($expression); $i++) {
        $currentChar = $expression[$i];

        if ('(' === $currentChar) {
            array_push($stack, $currentChar);
        } elseif (')' === $currentChar) {
            $last = array_pop($stack);

            if (false === in_array(sprintf('%s%s', $last, $currentChar), $pairs)) {
                return false;
            }
        }
    }

    return 0 === count($stack);
}
// END
