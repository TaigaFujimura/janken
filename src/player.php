<?php
class Player {
    private string $name;
    private Hand $hand;

    public function __construct($name, $hand)
    {
        $this -> name = $name;
        $this -> hand = $hand;
    }

    public function showHandInfo(): string
    {
        return "{$this->name}の手: {$this->hand->name()}";
    }

    public function fightWith($opponent_player): string
    {
        $player_hand = $this->hand;
        $opponent_hand = $opponent_player->hand;

        return $player_hand->fightResult($opponent_hand);
    }
}
