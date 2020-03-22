<?php

namespace App\AssociativeArrays;

/*
Реализуйте функцию buildQueryString, которая принимает на вход список параметров и возвращает сформированный query string из этих параметров. Имена параметров в выходной строке должны располагаться в алфавитном порядке (то есть их нужно отсортировать).
*/

// BEGIN (write your solution here)
function buildQueryString(array $params): string
{
    $query = '';
    ksort($params);

    foreach ($params as $key => $value) {
        $query .= sprintf('%s=%s&', $key, $value);
    }

    return rtrim($query, '&');
}
// END
