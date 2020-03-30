<?php

namespace App\Users;

use function Funct\Collection\flatten;

/*
	Реализуйте функцию getGirlFriends, которая принимает на вход список пользователей и возвращает плоский список подруг всех пользователей (без сохранения ключей). Друзья каждого пользователя хранятся в виде массива в ключе friends. Пол доступен по ключу gender и может принимать значения male или female.
*/

// BEGIN (write your solution here)
function getGirlFriends(array $users): array
{
    $friends = array_map(function (array $user) {
        return $user['friends'];
    }, $users);

    $friends = flatten($friends);

    $girls = array_filter($friends, function (array $friend) {
        return 'female' === $friend['gender'];
    });

    return array_values($girls);
}
// END
