<?php

namespace App\Solution;

/*
	Реализуйте функцию `hammingWeight`, которая считает вес Хэмминга.
 */

// BEGIN (write your solution here)
function hammingWeight(int $number): int
{
    $map = count_chars(decbin($number));

    return $map[49];
}
// END