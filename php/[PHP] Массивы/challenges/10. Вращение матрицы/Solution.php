<?php

namespace App\Solution;

/*
    Реализуйте функции rotateLeft и rotateRight, которые поворачивают матрицу влево (против часовой стрелки) и соответственно вправо (по часовой стрелке).
*/

// BEGIN (write your solution here)
function rotate(array $matrix, string $direction): array
{
    if (false === in_array($direction, ['left', 'right'], true)) {
        throw new \Exception(sprintf('Wrong direction provided: %s', $direction));
    }

    $n = count($matrix);
    $m = (true === isset($matrix[0])) ? count($matrix[0]) : 0;
    $rotated = [];

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            switch ($direction) {
                case 'left':
                    $rotated[$m - 1 - $j][$i] = $matrix[$i][$j];
                    break;
                case 'right':
                    $rotated[$j][$n - 1 - $i] = $matrix[$i][$j];
                    break;
            }
        }
    }

    return $rotated;
}

function rotateLeft(array $matrix): array
{
    return rotate($matrix, 'left');
}

function rotateRight(array $matrix): array
{
    return rotate($matrix, 'right');
}
// END
