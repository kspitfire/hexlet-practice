<?php

namespace App\AssociativeArrays;

/*
Реализуйте функцию fromPairs, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.
*/


// BEGIN (write your solution here)
function fromPairs(array $pairs): array
{
    $summary = [];

    foreach ($pairs as [$key, $value]) {
        $summary[$key] = $value;
    }

    return $summary;
}
// END
