<?php

namespace src\main\rule;

use src\main\const\HandConst;
use src\main\hand\Hand;

class NormalRule implements Rule
{
    private HandAffinity $handAffinity;
    private array $hands;

    public function __construct()
    {
        $this->handAffinity = new HandAffinity();
        $this->hands = array(
            HandConst::$guId => Hand::gu(),
            HandConst::$chokiId => Hand::choki(),
            HandConst::$paId => Hand::pa(),
        );
    }

    public function handAffinity(): HandAffinity { return $this->handAffinity; }
    public function hands(): array { return $this->hands; }
}