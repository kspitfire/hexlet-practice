<?php

namespace App\Solution;

/*
	Реализуйте функцию combine, которая объединяет несколько словарей (ассоциативных массивов) в один общий словарь. Функция принимает любое количество аргументов и возвращает результат в виде ассоциативного массива, в котором каждый ключ содержит массив уникальных значений. Элементы в массиве располагаются в том порядке, в котором они появляются во входящих словарях.
*/

// BEGIN (write your solution here)
function combine(array ...$items): array
{
    $combined = [];

    foreach ($items as $item) {
        foreach ($item as $key => $value) {
            if (false === array_key_exists($key, $combined) || false === in_array($value, $combined[$key])) {
                $combined[$key][] = $value;
            }
        }
    }

    return $combined;
}
// END
