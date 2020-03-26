<?php

namespace App\Prime;

/*
    Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.
*/

// BEGIN (write your solution here)
function sayPrimeOrNot(int $number): void
{
    isPrime($number) ? print 'yes' : print 'no';
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $i = 2;
    $j = 0;

    while ($i * $i <= $number && $j !== 1) {
        if (0 === $number % $i) {
            $j = 1;
        }

        $i++;
    }

    return (1 !== $j);
}

// END
