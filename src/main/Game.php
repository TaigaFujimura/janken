<?php
declare(strict_types=1);

namespace src\main;

use src\main\rule\Rule;
use src\main\hand\Hand;

class Game
{
    private Rule $rule;

    public function __construct(Rule $rule){$this->rule = $rule;}

    public function rule(): Rule { return $this->rule; }

    public function result(Hand $playerHand, Hand $opponentHand): string
    {
        return $this->rule->battleResult($playerHand, $opponentHand);
    }
}
