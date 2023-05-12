<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\definition\InvincibleHandDefinition;
use src\main\hand\Hand;
use src\main\hand\definition\HandDefinition;

class InvincibleRule implements Rule
{
    private HandDefinition $handDefinition;

    public function __construct()
    {
        $this->handDefinition = new InvincibleHandDefinition();
    }

    public function hands(): array { return $this->handDefinition->hands()->get(); }

    public function battleResult(Hand $player, Hand ...$opponents): string
    {
        return $this->handDefinition->affinity($player, ...$opponents)->get();
    }
}