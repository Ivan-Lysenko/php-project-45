<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $gameGreeting, array $gameData)
{
    line("Welcome to the Brain Games!");
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line($gameGreeting);

    foreach ($gameData as $question => $rigthAnswer) {
        line($question);
        $playerAnswer = prompt('');
        line("Your answer: %s", $playerAnswer);

        if ($playerAnswer === $rigthAnswer) {
            line('Correct!');
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.\n
            Let's try again, %s!", $playerAnswer, $rigthAnswer, $playerName);
            exit;
        }
    }

    line("Congratulations, %s!", $playerName);
}
