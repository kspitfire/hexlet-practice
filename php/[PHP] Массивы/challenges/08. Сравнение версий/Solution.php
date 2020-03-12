<?php

namespace App\Solution;

/*
	Реализуйте функцию `compareVersion`, которая сравнивает переданные версии `version1` и `version2`. Если `version1 > version2`, то функция должна вернуть `1`, если `version1 < version2`, то - `-1`, если же `version1 = version2`, то - `0`.
*/

// BEGIN (write your solution here)
function compareVersion(string $version1, string $version2): int
{
    $firstChunks = explode('.', $version1);
    $secondChunks = explode('.', $version2);

    for ($i = 0; $i < count($firstChunks); $i++) {
        $compare = ($firstChunks[$i] <=> $secondChunks[$i]);

        if ($compare !== 0) {
            break;
        }
    }

    return $compare;
}
// END
