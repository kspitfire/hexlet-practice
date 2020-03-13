<?php

namespace App\Solution;

/*
Реализуйте функцию `wordsCount`, которая считает количество одинаковых слов в предложении. Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.
*/

// BEGIN (write your solution here)
function wordsCount(string $str): array
{
    $chunks = explode(' ', $str);
    $output = [];

    foreach ($chunks as $chunk) {
        if (false === empty($chunk)) {
            if (false == empty($output[$chunk])) {
                $output[$chunk] += 1;
            } else {
                $output[$chunk] = 1;
            }
        }
    }

    return $output;
}
// END
