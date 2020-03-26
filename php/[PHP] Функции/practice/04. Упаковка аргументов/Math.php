<?php

namespace App\Math;

/*
	Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не передать ни одного аргумента, то она должна вернуть null.
*/

// BEGIN (write your solution here)
function average(int ...$numbers): ?float
{
    if (true === empty($numbers)) {
        return null;
    }

    return array_sum($numbers) / count($numbers);
}
// END
