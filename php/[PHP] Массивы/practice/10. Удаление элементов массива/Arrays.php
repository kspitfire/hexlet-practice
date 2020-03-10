<?php

namespace App\Arrays;

/*
    Реализуйте функцию `getSameParity`, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.
*/

// BEGIN (write your solution here)
function getSameParity(array $items): array
{
    if (true === empty($items)) {
        return [];
    }

    $isEven = ($items[0] % 2 === 0);
    $filtered = [];

    foreach ($items as $item) {
        if ($isEven === ($item % 2 === 0)) {
            $filtered[] = $item;
        }
    }

    return $filtered;
}
// END
