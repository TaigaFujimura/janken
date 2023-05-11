<?php

namespace src\main\hand;

use src\main\const\HandConst;

class Hand
{
    private int $id;
    private string $name;

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function gu(): Hand { return new Hand(HandConst::$guId, HandConst::$guName); }
    public static function choki(): Hand { return new Hand(HandConst::$chokiId, HandConst::$chokiName); }
    public static function pa(): Hand { return new Hand(HandConst::$paId, HandConst::$paName); }

    public function id(): int { return $this->id; }
    public function name(): string { return $this->name; }
}