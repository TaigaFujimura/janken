<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\Hand;
use src\main\hand\definition\HandDefinition;
use src\main\hand\definition\NormalHandDefinition;

class NormalRule implements Rule {
    private HandDefinition $handDefinition;
    private int $numberOfWinner;

    public function __construct(int $numberOfWinner) {
        $this->handDefinition = new NormalHandDefinition();
        $this->numberOfWinner = $numberOfWinner;
    }

    public function hands(): array {
        return $this->handDefinition->hands()->get();
    }

    public function battleResult(Hand $player, Hand ...$opponents): string {
        return $this->handDefinition->affinity($player, ...$opponents)->get();
    }

    public function numberOfWinner(): int { return $this->numberOfWinner; }
}