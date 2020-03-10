<?php

namespace App\Strings;

/*
	Реализуйте функцию `makeCensored`, которая заменяет каждое вхождение указанных слов в предложении на последовательность `$#%!` и возвращает полученную строку. Аргументы:

	   - Текст
	   - Набор стоп слов

	Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).
*/

// BEGIN (write your solution here)
function makeCensored(string $sentence, array $stopWords): string
{
    $placeholder = '$#%!';
    $words = explode(' ', $sentence);

    foreach ($words as $key => $word) {
        if (true === in_array($word, $stopWords)) {
            $words[$key] = $placeholder;
        }
    }

    return empty($stopWords) ? $sentence : implode(' ', $words);
}
// END
