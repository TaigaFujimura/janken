<?php
declare(strict_types=1);

namespace src\main;

use src\main\player\Player;
use src\main\player_list\PlayerList;
use src\main\rule\Rule;

class Game {
    private Rule $rule;
    private array $players;
    private PlayerList $playerList;

    public function __construct(Rule $rule, Player ...$players) {
        $this->rule = $rule;
        $this->players = $players;
        $this->playerList = new PlayerList($players);
    }

    public function entry(Player ...$players): void {
        $this->playerList->append(...$players);
    }

    public function setAllHands(): void {
        foreach($this->players as &$player) {
            $player = $player->setHand();
            $handId = $player->showHand();
            $hand = $this->rule->hands()->findById($handId);
            echo "{$player->getName()}の手: {$hand->name()}\n";
        }
        unset($player);
    }

    public function fight(): void {
        $hands = array();

        foreach ($this->players as $player) {
            $handId = $player->showHand();
            $hands[] = $this->rule->hands()->findById($handId);
        }

        $playerHand = array_shift($hands);

        echo $this->rule->battleResult($playerHand, ...$hands)."\n";
    }

    public function fightNew(): void {

    }
}
