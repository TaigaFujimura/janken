<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand_define\InvincibleHandDefine;
use src\main\hand\Hand;
use src\main\hand_list\HandList;

class InvincibleRule implements Rule
{
    private InvincibleHandDefine $handDefinition;
    private int $numberOfWinner;

    public function __construct(int $numberOfWinner)
    {
        $this->handDefinition = new InvincibleHandDefine();
        $this->numberOfWinner = $numberOfWinner;
    }

    public function hands(): HandList { return $this->handDefinition->hands(); }

    public function battleResult(Hand $player, Hand ...$opponents): string
    {
        return $this->handDefinition->affinity($player, ...$opponents)->message();
    }

    public function numberOfWinner(): int { return $this->numberOfWinner; }
}