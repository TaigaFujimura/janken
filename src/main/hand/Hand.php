<?php

namespace src\main\hand;

use src\main\hand\HandProperty;

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

    public static function gu(): Hand { return new Hand(HandProperty::$guId, HandProperty::$guName); }
    public static function choki(): Hand { return new Hand(HandProperty::$chokiId, HandProperty::$chokiName); }
    public static function pa(): Hand { return new Hand(HandProperty::$paId, HandProperty::$paName); }
    public static function invincible(): Hand { return new Hand(HandProperty::$invincibleId, HandProperty::$invincibleName); }
}