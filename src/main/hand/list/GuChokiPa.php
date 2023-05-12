<?php

namespace src\main\hand\list;

use src\main\hand\HandProperty;
use src\main\hand\Hand;

class GuChokiPa implements HandList
{
    private array $hands;
    public function __construct() {
        $this->hands = array(
            HandProperty::$guId => Hand::gu(),
            HandProperty::$chokiId => Hand::choki(),
            HandProperty::$paId => Hand::pa(),
        );
    }

    public function get(): array { return $this->hands; }
}