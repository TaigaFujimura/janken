<?php

namespace src\main\hand_list;

use src\main\hand\Hand;

class GuChokiPa implements HandList
{
    private array $hands;

    public function __construct() {
        $gu = Hand::gu();
        $choki = Hand::choki();
        $pa = Hand::pa();

        $this->hands = array(
            $gu->id() => $gu,
            $choki->id() => $choki,
            $pa->id() => $pa,
        );
    }

    public function findById(int $handId): Hand { return $this->hands[$handId]; }
}