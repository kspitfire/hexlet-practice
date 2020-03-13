<?php

namespace App\Arrays;

/*
Реализуйте функцию `genDiff`, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде ассоциативного массива. Ключами результирующего массива будут все ключи из двух входящих массивов, каждому из которых должно соответствовать одно из четырёх значений: `added`, `deleted`, `changed` или `unchanged`.
*/

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

// BEGIN (write your solution here)
function genDiff(array $arr1, array $arr2): array
{
    $diff = [];
    $merged = union($arr1, $arr2);

    foreach ($merged as $key => $item) {
        if (false === array_key_exists($key, $arr1)) {
            $diff[$key] = 'added';
        } elseif (false === array_key_exists($key, $arr2)) {
            $diff[$key] = 'deleted';
        } elseif ($arr1[$key] === $arr2[$key]) {
            $diff[$key] = 'unchanged';
        } else {
            $diff[$key] = 'changed';
        }
    }

    return $diff;
}
// END
