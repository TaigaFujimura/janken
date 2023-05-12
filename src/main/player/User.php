<?php

namespace src\main\player;

class User implements Player {
    private string $name;
    private int $handId;

    private function __construct(string $name, int $handId) {
        $this->name = $name;
        $this->handId = $handId;
    }

    public static function newPlayer(string $name): User {
        return new User($name, 1);
    }

    public function getName(): string { return $this->name; }

    public function setHand(): User {
        echo "出す手を入力して下さい > ";
        $handId = (int)fgets(STDIN);
        return new User($this->name, $handId);
    }

    public function showHand(): int { return $this->handId; }
 }