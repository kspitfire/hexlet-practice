<?php

namespace App\Superseries;

/*
	Реализуйте функцию `getSuperSeriesWinner(scores)`, которая находит команду победителя для конкретной суперсерии. Победитель определяется как команда у которой больше побед в конкретной серии. Функция принимает на вход массив, в котором каждый элемент это массив описывающий счет в конкретной игре. Результат функции – название страны: 'canada', 'ussr'. Если суперсерия закончилась в ничью, то нужно вернуть `null`.
*/

// BEGIN (write your solution here)
function getSuperSeriesWinner(array $scores): ?string
{
    $canadaScore = $ussrScore = 0;

    foreach ($scores as $item) {
        $winner = $item[0] <=> $item[1];

        if ($winner !== 0) {
            if ($winner === -1) {
                $ussrScore++;
            } else {
                $canadaScore++;
            }
        }
    }

    $winner = ($canadaScore <=> $ussrScore);

    if (0 === $winner) {
        return null;
    }

    return ($winner < 0) ? 'ussr' : 'canada';
}
// END
