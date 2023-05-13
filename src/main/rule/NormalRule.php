<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\Hand;
use src\main\hand_define\HandDefine;
use src\main\hand_define\NormalHandDefine;
use src\main\hand_list\HandList;

class NormalRule implements Rule {
    private HandDefine $handDefinition;
    private int $numberOfWinner;

    public function __construct(int $numberOfWinner) {
        $this->handDefinition = new NormalHandDefine();
        $this->numberOfWinner = $numberOfWinner;
    }

    // TODO:バケツリレー
    public function hands(): HandList {
        return $this->handDefinition->hands();
    }
    // TODO:バケツリレー
    public function battleResult(Hand $player, Hand ...$opponents): string {
        return $this->handDefinition->affinity($player, ...$opponents)->get();
    }

    public function numberOfWinner(): int { return $this->numberOfWinner; }
}