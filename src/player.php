<?php
class Player {
    public $name;
    public $hand;

    function __construct($name, $hand) {
        $this -> name = $name;
        $this -> hand = $hand;
    }

    function fightWith($opponent_player) {
        $player_hand = $this->hand;
        $opponent_hand = $opponent_player->hand;

        return $player_hand->fightResult($opponent_hand);
    }
}
