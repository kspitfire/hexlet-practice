<?php

namespace App\Solution;

/*
 * Напишите функцию `generate`, которая возвращает указанную строку треугольника паскаля в виде массива.
 */

// BEGIN (write your solution here)
function generate(int $lineNumber): array
{
    $triangle = [];

    for ($i = 0; $i <= $lineNumber; $i++) {
        $currentLine = [];
        $prevLine = ($i > 0) ? $triangle[$i - 1] : [];

        if (false === empty($prevLine)) {
            $currentLine[] = 1;

            if ($i > 1) {
                for ($j = 0; $j < count($prevLine) - 1; $j++) {
                    $currentLine[] = $prevLine[$j] + $prevLine[$j + 1];
                }
            }
        }

        $currentLine[] = 1;
        $triangle[] = $currentLine;
    }

    return $triangle[$lineNumber];
}
// END
