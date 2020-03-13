<?php

namespace App\Arrays;

/*
	Реализуйте функцию `getIn`, которая извлекает из массива (который может быть любой глубины вложенности) значение по указанным ключам. Аргументы:

	    - Исходный массив
	    - Массив ключей, по которым ведется поиск значения

	В случае, когда добраться до значения невозможно, возвращается `null`.
*/

// BEGIN (write your solution here)
function getIn(array $data, array $keys)
{
    $item = $data;

    foreach ($keys as $key) {
        if (false === is_array($item) || false === array_key_exists($key, $item)) {
            return null;
        }

        $item = $item[$key];
    }

    return $item;
}
// END
