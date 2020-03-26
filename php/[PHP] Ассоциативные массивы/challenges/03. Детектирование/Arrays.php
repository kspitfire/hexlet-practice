<?php

/*
Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам (всем переданным). Если совпадений не было, то функция должна вернуть null.
*/

namespace App\Arrays;

// BEGIN (write your solution here)
function findWhere(array $dictionary, array $pairs): ?array
{
    $found = null;

    foreach ($dictionary as $idx => $item) {
        $current = [];

        foreach ($pairs as $key => $single) {
            if (true === array_key_exists($key, $item) && $single === $item[$key]) {
                $current[$key] = $item[$key];
            }
        }

        if (true === empty(array_diff_assoc($pairs, $current))) {
            $found = $dictionary[$idx];
            break;
        }
    }

    return $found;
}
// END
