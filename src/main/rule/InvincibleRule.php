<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\definition\InvincibleHandDefinition;
use src\main\hand\Hand;
use src\main\hand\definition\HandDefinition;

class InvincibleRule implements Rule
{
    private HandDefinition $handDefinition;
    private int $numberOfWinner;

    public function __construct(int $numberOfWinner)
    {
        $this->handDefinition = new InvincibleHandDefinition();
        $this->numberOfWinner = $numberOfWinner;
    }

    public function hands(): array { return $this->handDefinition->hands()->get(); }

    public function battleResult(Hand $player, Hand ...$opponents): string
    {
        return $this->handDefinition->affinity($player, ...$opponents)->get();
    }

    public function numberOfWinner(): int { return $this->numberOfWinner; }
}