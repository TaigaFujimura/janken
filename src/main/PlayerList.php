<?php

namespace src\main;

use src\main\player\Player;

class PlayerList {

    /** @var Player[] */
    private array $players;

    public function __construct(array $players) {
        $this->players = $players;
    }


}