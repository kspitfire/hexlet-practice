<?php

namespace App\Strings;

/*
	Реализуйте функцию `countUniqChars`, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
*/

// BEGIN (write your solution here)
function countUniqChars(string $str): int
{
    if (0 === strlen($str)) {
        return 0;
    }

    $chars = str_split($str);
    $unique = [];

    foreach ($chars as $char) {
        if (false === in_array($char, $unique, true)) {
            $unique[] = $char;
        }
    }

    return count($unique);
}
// END
