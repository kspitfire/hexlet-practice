<?php

namespace App\Solution;

/*
    Реализуйте функцию toRoman, которая переводит арабские числа в римские. Функция принимает на вход целое число в диапазоне от 1 до 3000, а возвращает строку с римским представлением этого числа.

    Реализуйте функцию toArabic, которая переводит число в римской записи в число, записанное арабскими цифрами.
*/

const NUMERALS = [
    "M" => 1000,
    "CM" => 900,
    "D" => 500,
    "CD" => 400,
    "C" => 100,
    "XC" => 90,
    "L" => 50,
    "XL" => 40,
    "X" => 10,
    "IX" => 9,
    "V" => 5,
    "IV" => 4,
    "I" => 1,
];

// BEGIN (write your solution here)
function toRoman(int $arabic): string
{
    $values = array_values(NUMERALS);
    $map = array_flip(NUMERALS);
    $current = $arabic;
    $i = 0;
    $output = [];

    foreach ($values as $divider) {
        $div = intdiv($current, $divider);
        $mod = $current % $divider;

        if ($div > 0) {
            for ($j = 1; $j <= $div; $j++) {
                $output[] = $map[$divider];
            }

            $current = $mod;
        }
    }

    return implode($output);
}

function toArabic(string $roman): int
{
    $romanAsArray = str_split($roman);
    $output = 0;
    $i = 0;

    while ($i < count($romanAsArray)) {
        $current = $romanAsArray[$i];
        $next = isset($romanAsArray[$i + 1]) ? $romanAsArray[$i + 1] : null;

        if (null !== $next) {
            if (NUMERALS[$next] > NUMERALS[$current]) {
                $output += NUMERALS[$current . $next];
                $i += 2;
            } else {
                $output += NUMERALS[$current];
                $i++;
            }
        } else {
            $output += NUMERALS[$current];
            break;
        }
    }

    return $output;
}
// END
