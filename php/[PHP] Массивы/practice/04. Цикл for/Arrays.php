<?php

namespace App\Arrays;

/*
	Реализуйте функцию `addPrefix`, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:

	   - Массив
	   - Префикс

	После префикса автоматически добавляется пробел.
*/


// BEGIN (write your solution here)
function addPrefix(array $names, string $prefix): array
{
    $prefixed = $names;

    for ($i = 0; $i < count($prefixed); $i++) {
        $prefixed[$i] = sprintf('%s %s', $prefix, (string) $prefixed[$i]);
    }

    return $prefixed;
}
// END
