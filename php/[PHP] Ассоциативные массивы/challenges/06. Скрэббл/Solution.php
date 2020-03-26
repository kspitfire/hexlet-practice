<?php

/*
    Реализуйте функцию scrabble, которая принимает на вход два параметра: набор символов (строку) и слово, и проверяет, можно ли из переданного набора составить это слово. В результате вызова функция возвращает true или false. При проверке учитывается количество символов, нужных для составления слова, и не учитывается их регистр.
*/

namespace App\Solution;

function getCharStats(string $str): array
{
    $stats = [];
    
    foreach (str_split($str) as $char) {
        $key = strtolower($char);
        if (true === isset($stats[$key])) {
            $stats[$key]++;
        } else {
            $stats[$key] = 1;
        }
    }

    return $stats;
}

// BEGIN (write your solution here)
function scrabble(string $chars, string $word): bool
{
    $wordStats = getCharStats($word);
    $charStats = getCharStats($chars);

    foreach ($wordStats as $char => $stat) {
        if (false === array_key_exists($char, $charStats) || $charStats[$char] < $stat) {
            return false;
        }
    }

    return true;
}
// END
