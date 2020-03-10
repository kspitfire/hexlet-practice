<?php

namespace App\Arrays;

/*
    Чанкованием (от англ. Chunk — ячейка, кусок, осколок) в программировании называют разбиение коллекции (массива) на несколько более мелких коллекций.
*/

// BEGIN (write your solution here)
function getChunked(array $items, int $chunksAmount)
{
    $chunked = $chunk = [];
    $j = 0;

    foreach ($items as $key => $item) {
        if (0 === ($key + 1) % $chunksAmount) {
            $chunk[] = $item;
            $chunked[] = $chunk;
            $chunk = [];
        } else {
            $chunk[] = $item;
        }
    }

    if (false === empty($chunk)) {
        $chunked[] = $chunk;
    }

    return $chunked;
}
// END
