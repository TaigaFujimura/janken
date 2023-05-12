<?php

namespace src\main\hand;

class HandAffinity
{
    private string $message;

    public function __construct(string $message) { $this->message = $message; }

    public static function strong(): HandAffinity { return new HandAffinity("勝ち!!!"); }
    public static function even(): HandAffinity { return new HandAffinity("あいこ"); }
    public static function weak(): HandAffinity { return new HandAffinity("負け..."); }

    public function get(): string { return $this->message; }

    public static string $strong = "勝ち!!!";
    public static string $even = "あいこ";
    public static string $weak = "負け...";
}
