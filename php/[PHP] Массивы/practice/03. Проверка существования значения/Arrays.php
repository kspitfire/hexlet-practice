<?php

namespace App\Arrays;

/*
	Реализуйте функцию `get`, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:

	   - Массив
	   - Индекс
	   - Значение по умолчанию (равно `null`)
*/


// BEGIN (write your solution here)
function get(array $cities, int $index, $defaultValue = null)
{
    return array_key_exists($index, $cities) ? $cities[$index] : $defaultValue;
}
// END
