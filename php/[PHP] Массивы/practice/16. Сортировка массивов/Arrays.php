<?php

namespace App\Arrays;

/*
	Реализуйте функцию `bubbleSort`, которая сортирует массив используя пузырьковую сортировку. Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
*/

// BEGIN (write your solution here)
function bubbleSort(array $items): array
{
    $size = count($items);

    do {
        $isSwapped = false;

        for ($i = 0; $i < $size - 1; $i++) {
            if ($items[$i] > $items[$i + 1]) {
                $temp = $items[$i];
                $items[$i] = $items[$i + 1];
                $items[$i + 1] = $temp;
                $isSwapped = true;
            }
        }

        $size--;
    } while ($isSwapped);

    return $items;
}
// END
