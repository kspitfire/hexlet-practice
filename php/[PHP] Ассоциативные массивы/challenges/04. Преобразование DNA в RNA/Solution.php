<?php

namespace App\Solution;

/*
    Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).
*/

// BEGIN (write your solution here)
function toRna(string $dna): string
{
    $map = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];

    $dnaAsArray = str_split($dna);
    $rnaAsArray = [];

    foreach ($dnaAsArray as $nucleotide) {
        $rnaAsArray[] = $map[$nucleotide];
    }

    return implode($rnaAsArray);
}
// END
