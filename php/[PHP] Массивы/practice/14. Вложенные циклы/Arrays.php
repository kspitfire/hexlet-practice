<?php

namespace App\Arrays;

/*
	Реализуйте функцию `getSameCount`, которая считает количество общих уникальных элементов для двух массивов. 
*/

// BEGIN (write your solution here)
function getSameCount(array $first, array $second): int
{
    $unique = [];

    if (true === empty($first) || true === empty($second)) {
        return 0;
    }

    foreach ($first as $item) {
        if (true === in_array($item, $second, true) && false === in_array($item, $unique, true)) {
            $unique[] = $item;
        }
    }

    return count($unique);
}
// END
