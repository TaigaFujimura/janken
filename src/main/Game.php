<?php
declare(strict_types=1);

namespace src\main;

use src\main\rule\Rule;
use src\main\hand\Hand;

class Game
{
    private Rule $rule;

    public function __construct(Rule $rule){$this->rule = $rule;}

    public function fight(Hand $player, Hand ...$opponents): string
    {
        return $this->rule->battleResult($player, ...$opponents);
    }
}
