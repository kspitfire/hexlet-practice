<?php

namespace App\Arrays;

/*
	Реализуйте функцию `getTotalAmount`. Функция принимает на вход в виде массива кошелёк с деньгами и название валюты и возвращает сумму денег указанной валюты.

	Реализуйте данную функцию используя управляющие инструкции.

	Параметры функции:

	   - Массив содержащий купюры различной валюты с различными номиналами
	   - Наименование валюты
*/

// BEGIN (write your solution here)
function getTotalAmount(array $items, string $currency): int
{
    $sum = 0;

    foreach ($items as $item) {
        if (false !== strpos($item, $currency)) {
            $chunks = explode(' ', $item);
            $sum += (int) $chunks[1];
        }
    }

    return $sum;
}
// END
