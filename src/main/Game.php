<?php
declare(strict_types=1);

namespace src\main;

use src\main\hand\Hand;
use src\main\hand\Gu;
use src\main\hand\Choki;
use src\main\hand\Pa;

class Game
{
    private array $hands;

    public function __construct()
    {
        $this->hands = array(
            1 => new Gu(),
            2 => new Choki(),
            3 => new Pa(),
        );
    }

    public function hand(int $id): Hand { return $this->hands[$id]; }

    public function result(Hand $playerHand, Hand $opponentHand): string
    {
        return $playerHand->fightResult($opponentHand);
    }
}
