<?php

namespace App\Users;

/*
Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых. Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.
*/

use function Funct\Collection\firstN;

// BEGIN (write your solution here)
function takeOldest(array $users, int $topN = 1): array
{
    usort($users, function (array $a, array $b) {
        return strtotime($a['birthday']) <=> strtotime($b['birthday']);
    });

    return firstN($users, $topN);
}
// END
