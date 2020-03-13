<?php

namespace App\Arrays;

/*
Реализуйте функцию `getSortedNames`, которая принимает на вход список пользователей, извлекает их имена, сортирует и возвращает отсортированный список имен.
*/

// BEGIN (write your solution here)
function getSortedNames(array $users): array
{
    $names = [];

    foreach ($users as $user) {
        ['name' => $name] = $user;
        $names[] = $name;
    }

    sort($names);

    return $names;
}
// END
