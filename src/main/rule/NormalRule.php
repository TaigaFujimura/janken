<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\const\HandConst;
use src\main\hand\Hand;
use src\main\hand\NormalAffinity;

class NormalRule implements Rule
{
    private NormalAffinity $affinity;
    private array $hands;

    public function __construct()
    {
        $this->affinity = new NormalAffinity();
        $this->hands = array(
            HandConst::$guId => Hand::gu(),
            HandConst::$chokiId => Hand::choki(),
            HandConst::$paId => Hand::pa(),
        );
    }

    public function hands(): array { return $this->hands; }

    public function battleResult(Hand $playerHand, Hand $opponentHand): string
    {
        return $this->affinity->compare($playerHand, $opponentHand);
    }
}