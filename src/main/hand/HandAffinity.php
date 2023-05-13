<?php

namespace src\main\hand;

class HandAffinity
{
    private string $message;

    private function __construct(string $message) { $this->message = $message; }

    public function message(): string { return $this->message; }

    public static function strong(): HandAffinity { return new HandAffinity("勝ち!!!"); }
    public static function even(): HandAffinity { return new HandAffinity("あいこ"); }
    public static function weak(): HandAffinity { return new HandAffinity("負け..."); }
}
