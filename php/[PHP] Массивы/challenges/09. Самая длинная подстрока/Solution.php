<?php

namespace App\Solution;

/*
    Реализуйте функцию `longestLength` принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке `qweqrty`, можно выделить следующие подстроки: `qwe`, `weqrty`. Самой длинной будет `weqrty`.
*/

// BEGIN (write your solution here)
function longestLength(string $str): int
{
    $arr = str_split($str);
    $substrings = [];

    for ($i = 0; $i < count($arr); $i++) {
        $substrings[$i] = [$arr[$i]];

        for ($j = $i + 1; $j < count($arr); $j++) {
            if (true === in_array($arr[$j], $substrings[$i])) {
                break;
            }

            $substrings[$i][] = $arr[$j];
        }
    }

    $max = 0;

    foreach ($substrings as $sub) {
        if (count($sub) > $max) {
            $max = count($sub);
        }
    }

    return $max;
}
// END
