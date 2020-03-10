<?php

namespace App\Arrays;

/*

    Реализуйте функцию `calcInPolishNotation`, которая принимает массив, каждый элемент которого содержит число или знак операции `(+, -, *, /)`. Функция должна вернуть результат вычисления по обратной польской записи.
*/

// BEGIN (write your solution here)
function calcInPolishNotation(array $statements): int
{
    $stack = [];

    foreach ($statements as $expr) {
        if (true === is_int($expr)) {
            array_push($stack, $expr);
        } else {
            $first = array_pop($stack);
            $second = array_pop($stack);

            switch ($expr) {
                case '+':
                    array_push($stack, ($second + $first));
                    break;
                case '/':
                    array_push($stack, ($second / $first));
                    break;
                case '*':
                    array_push($stack, ($second * $first));
                    break;
                case '-':
                    array_push($stack, ($second - $first));
                    break;
            }
        }
    }

    return array_pop($stack);
}
// END
