<?php

namespace App\Arrays;

/*
	Реализуйте функцию union(...$arrays), которая находит объединение всех переданных массивов. Функция принимает на вход от одного массива и больше. Ключи исходных массивов не сохраняются (т.е. все значения итогового массива заново индексируются: 0, 1, 2, ...).
*/

function union($first, ...$rest)
{
    // BEGIN (write your solution here)
    return array_values(array_unique(array_merge($first, ...$rest)));
    // END
}
