<?php

namespace src\main\hand;

class Hand
{
    private int $id;
    private string $name;

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function id(): int { return $this->id; }
    public function name(): string { return $this->name; }

    public static function gu(): Hand { return new Hand(1, "グー"); }
    public static function choki(): Hand { return new Hand(2, "チョキ"); }
    public static function pa(): Hand { return new Hand(3, "パー"); }
    public static function muteki(): Hand { return new Hand(4, "無敵"); }
}