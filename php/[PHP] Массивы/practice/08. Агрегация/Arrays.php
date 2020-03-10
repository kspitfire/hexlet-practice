<?php

namespace App\Arrays;

/*
	Реализуйте функцию `calculateAverage`, которая высчитывает среднее арифметическое элементов массива. 
*/

// BEGIN (write your solution here)
function calculateAverage(array $values): ?float
{
    if (true === empty($values)) {
        return null;
    }

    $sum = 0;

    foreach ($values as $value) {
        $sum += $value;
    }

    return (float) $sum / count($values);
}
// END
