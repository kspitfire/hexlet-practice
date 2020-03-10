<?php

namespace App\Arrays;

/*
 * Реализуйте функцию `getMirrorMatrix`, которая принимает двумерный массив (матрицу) и возвращает 
 * массив, изменённый таким образом, что правая половина матрицы становится зеркальной копией левой 
 * половины, симметричной относительно вертикальной оси матрицы. Для простоты условимся, что 
 * матрица всегда имеет чётное количество столбцов и количество столбцов всегда равно количеству 
 * строк.
 */

// BEGIN (write your solution here)
function getMirrorMatrix(array $matrix): array
{
    $mirrored = $matrix;
    $length = count($matrix[0]);
    $center = $length / 2;

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < $center; $j++) {
            $mirrored[$i][($length - 1) - $j] = $mirrored[$i][$j];
        }
    }

    return $mirrored;
}
// END
