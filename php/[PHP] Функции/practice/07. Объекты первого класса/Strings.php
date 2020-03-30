<?php

namespace App\Strings;

/*
Реализуйте анонимную функцию, которая принимает на вход строку и возвращает её последний символ (или null, если строка пустая). Запишите созданную функцию в переменную $last.
*/

function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function (string $str) {
        return ($str === '') ? null : substr($str, -1);
    };
    // END

    return $last($text);
}
