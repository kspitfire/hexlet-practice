<?php

namespace App\Solution;

/*
	Реализуйте функцию `summaryRanges`, которая находит в массиве непрерывные возрастающие последовательности чисел и возвращает массив с их перечислением.
*/

// BEGIN (write your solution here)
function summaryRanges(array $sequence): array
{
    $ranges = $found = $output = [];

    for ($i = 0; $i < count($sequence); $i++) {
        if (true === empty($found)) {
            $found[] = $sequence[$i];
        } else {
            if ($found[count($found) - 1] + 1 === $sequence[$i]) {
                $found[] = $sequence[$i];
            } else {
                if (count($found) > 1) {
                    $ranges[] = $found;
                }

                $found = [$sequence[$i]];
            }
        }
    }
    
    if (false === empty($found) && count($found) > 1) {
        $ranges[] = $found;
    }

    foreach ($ranges as $range) {
        $str = sprintf('%d->%d', $range[0], $range[count($range) - 1]);
        $output[] = $str;
    }

    return $output;
}
// END
