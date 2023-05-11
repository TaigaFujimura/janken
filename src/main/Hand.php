<?php

namespace src\main;

class Hand
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function id(): int { return $this->id; }
    public function name(): int { return $this->name; }
}