<?php

namespace App\Arrays;

/*
    Реализуйте функцию `isContinuousSequence`, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность `[4, 5, 6, 7]` — непрерывная, а `[0, 1, 3]` — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.
*/

// BEGIN (write your solution here)
function isContinuousSequence(array $seq): bool
{
    if (count($seq) < 2) {
        return false;
    }

    foreach ($seq as $key => $value) {
        if ($key > 0) {
            $prev = $seq[($key - 1)];
            
            if ($value !== ($prev + 1)) {
                return false;
            }
        }
    }

    return true;
}
// END
