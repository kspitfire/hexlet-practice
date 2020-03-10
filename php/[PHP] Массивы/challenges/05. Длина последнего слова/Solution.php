<?php

namespace App\Solution;

/*
	Реализуйте функцию `lengthOfLastWord`, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность, не содержащая пробелов.
 */

// BEGIN (write your solution here)
function lengthOfLastWord(string $sentence): int
{
    $words = explode(' ', trim($sentence));

    return strlen($words[count($words) - 1]);
}
// END
