<?php

namespace App\Arrays;

/*
	Реализуйте функцию `swap`, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.

	Параметры функции:

	   - Массив
	   - Индекс

	Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
*/

// BEGIN (write your solution here)
function swap(array $swap, int $index): array
{
    $prev = $index - 1;
    $next = $index + 1;

    if (array_key_exists($index, $swap) && array_key_exists($prev, $swap) && array_key_exists($next, $swap)) {
        $temp = $swap[$prev];
        $swap[$prev] = $swap[$next];
        $swap[$next] = $temp;
    }

    return $swap;
}
// END
