<?php

namespace src\main\rule;

use src\main\const\HandConst;
use src\main\hand\Hand;
use src\main\hand\InvincibleAffinity;

class InvincibleRule implements Rule
{
    private InvincibleAffinity $affinity;
    private array $hands;

    public function __construct()
    {
        $this->affinity = new InvincibleAffinity();
        $this->hands = array(
            HandConst::$guId => Hand::gu(),
            HandConst::$chokiId => Hand::choki(),
            HandConst::$paId => Hand::pa(),
            HandConst::$invincibleId => Hand::invincible(),
        );
    }

    public function battleResult(Hand $playerHand, Hand $opponentHand): string
    {
        return $this->affinity->battle($playerHand, $opponentHand);
    }
    public function hands(): array { return $this->hands; }
}