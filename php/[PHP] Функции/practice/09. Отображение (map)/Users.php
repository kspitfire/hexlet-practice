<?php

namespace App\Users;

/*
	Реализуйте функцию getChildren, которая принимает на вход список пользователей и возвращает плоский список их детей. Дети каждого пользователя хранятся в виде массива в ключе children
*/

use function Funct\Collection\flatten;

// BEGIN (write your solution here)
function getChildren(array $users): array
{
    $children = [];
    $children[] = array_map(function (array $user) {
        return $user['children'];
    }, $users);

    return flatten($children, 2);
}
// END
