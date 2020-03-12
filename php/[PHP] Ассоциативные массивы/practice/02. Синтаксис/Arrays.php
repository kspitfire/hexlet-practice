<?php

namespace App\Arrays;

/*
    Реализуйте функцию `getComposerFileData`, которая возвращет ассоциативный массив, соответствующий json из файла composer.json в этом упражнении. Всё, что вам нужно сделать — посмотреть на содержимое composer.json и руками сформировать массив аналогичной структуры.
*/

// BEGIN (write your solution here)
function getComposerFileData(): array
{
    return [
        'autoload' => [
            'files' => [
                'src/Arrays.php',
            ],
        ],
        'config' => [
            'vendor-dir' => '/composer/vendor',
        ],
    ];
}
// END