<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\const\HandConst;
use src\main\hand\affinity\InvincibleAffinity;
use src\main\hand\Hand;
use src\main\hand\affinity\Affinity;

class InvincibleRule implements Rule
{
    private Affinity $affinity;
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

    public function battleResult(Hand $player, Hand ...$opponents): string
    {
        return $this->affinity->compare($player, ...$opponents);
    }
    public function hands(): array { return $this->hands; }
}