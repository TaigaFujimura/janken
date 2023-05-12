<?php

namespace src\main\player;

interface Player {
    public static function newPlayer(string $name): Player;
    public function getName(): string;
    public function setHand(): Player;
    public function showHand(): int;
}