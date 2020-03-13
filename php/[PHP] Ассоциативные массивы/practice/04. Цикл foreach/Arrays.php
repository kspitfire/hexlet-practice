<?php

namespace App\Arrays;

/*
	Реализуйте функцию `pick`, которая извлекает из переданного массива все элементы по указанным ключам и возвращает новый массив. Аргументы:

	    - Исходный массив
	    - Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива, и на основе выбранных данных сформирован новый массив
*/

// BEGIN (write your solution here)
function pick(array $data, array $keysToPick): array
{
    $filtered = [];

    foreach ($keysToPick as $key) {
        if (true === array_key_exists($key, $data)) {
            $filtered[$key] = $data[$key];
        }
    }

    return $filtered;
}
// END
