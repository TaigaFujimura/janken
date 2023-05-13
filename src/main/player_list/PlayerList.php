<?php

namespace src\main\player_list;

use src\main\player\Player;

class PlayerList {

    /** @var Player[] */
    private array $players;

    public function __construct(array $players) {
        $this->players = $players;
    }

    public function append(Player ...$newPlayers): void {
        $this->players[] = $newPlayers;
    }

    public function setAllHands(): PlayerList {
        $players = $this->players;

        foreach($players as &$player) {
            $player = $player->setHand();
        }
        unset($player);

        return new PlayerList($players);
    }

    public function winners(): PlayerList {
        return $this;
    }
}
