<?php

namespace src\main\player;

class Computer implements Player {
    private string $name;
    private int $handId;

    private function __construct(string $name, int $handId) {
        $this->name = $name;
        $this->handId = $handId;
    }

    public static function newPlayer(string $name): Computer {
        return new Computer($name, 1);
    }

    public function getName(): string { return $this->name; }

    public function setHand(): Computer {
        $handId = rand(1, 3);
        return new Computer($this->name, $handId);
    }

    public function showHand(): int { return $this->handId; }
}