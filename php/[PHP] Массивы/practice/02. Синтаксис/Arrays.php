<?php

namespace App\Arrays;

/*
    Реализуйте функцию `apply`, которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:
       - `reset` - Сброс массива
       - `remove` - Удаление значения по индексу
       - `change` - Обновление значения по индексу
*/

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    switch ($operationName) {
        case 'reset':
            $arr = [];
            break;
        case 'remove':
            unset($arr[$index]);
            break;
        case 'change':
            $arr[$index] = $value;
            break;
        default:
            throw new \Exception(sprintf('Wrong operation name was provided: %s', (string) $operationName));
    }

    return $arr;
    // END
}
