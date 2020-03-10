<?php

namespace App\Arrays;

/*
	Реализуйте функцию `getIntersectionOfSortedArray`, которая принимает на вход два отсортированных массива и находит их пересечение.
*/

function getIntersectionOfSortedArray($arr1, $arr2)
{
    // BEGIN (write your solution here)
    $intersection = [];

    if (true === empty($arr1) || true === empty($arr2)) {
        return $intersection;
    }

    $i = $j = 0;

    do {
        $comparison = ($arr1[$i] <=> $arr2[$j]);

        if ($comparison < 0) {
            $i++;
        } elseif ($comparison === 0) {
            $intersection[] = $arr1[$i];
            $i++;
            $j++;
        } else {
            $j++;
        }
    } while ($i < count($arr1) && $j < count($arr2));

    return $intersection;
    // END
}
