<?php

namespace src\main\rule;

use src\main\const\HandConst;
use src\main\hand\Hand;
use src\main\hand\NormalAffinity;

class NormalRule implements Rule
{
    private NormalAffinity $handAffinity;
    private array $hands;

    public function __construct()
    {
        $this->handAffinity = new NormalAffinity();
        $this->hands = array(
            HandConst::$guId => Hand::gu(),
            HandConst::$chokiId => Hand::choki(),
            HandConst::$paId => Hand::pa(),
        );
    }

    public function handAffinity(): NormalAffinity { return $this->handAffinity; }
    public function hands(): array { return $this->hands; }
}