<?php

namespace src\main\hand_list;

use src\main\hand\Hand;

class GuChokiPaInvincible implements HandList
{
    private array $hands;

    public function __construct() {
        $gu = Hand::gu();
        $choki = Hand::choki();
        $pa = Hand::pa();
        $muteki = Hand::muteki();

        $this->hands = array(
            $gu->id() => $gu,
            $choki->id() => $choki,
            $pa->id() => $pa,
            $muteki->id() => $muteki,
        );
    }

    public function findById(int $handId): Hand { return $this->hands[$handId]; }
}