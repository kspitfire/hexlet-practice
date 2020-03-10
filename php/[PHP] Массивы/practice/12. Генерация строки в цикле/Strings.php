<?php

namespace App\Strings;

/*
	Реализуйте функцию `buildDefinitionList`, которая генерирует html список определений (теги `dl`, `dt` и `dd`) и возвращает получившуюся строку. При отсутствии элементов в массиве функция возвращает пустую строку.
*/

// BEGIN (write your solution here)
function buildDefinitionList(array $definitions): string
{
    $html = '';

    if (false === empty($definitions)) {
        $chunks = [];

        foreach ($definitions as $item) {
            $chunks[] = sprintf('<dt>%s</dt><dd>%s</dd>', $item[0], $item[1]);
        }

        $html = sprintf('<dl>%s</dl>', implode('', $chunks));
    }

    return $html;
}
// END
