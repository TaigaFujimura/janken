<?php

namespace src\main\hand;

class HandAffinity
{
    private string $message;

    public function __construct(string $message) { $this->message = $message; }

    public function get(): string { return $this->message; }

    private static string $strong = "勝ち!!!";
    private static string $even = "あいこ";
    private static string $weak = "負け...";

    public static function strong(): HandAffinity { return new HandAffinity(self::$strong); }
    public static function even(): HandAffinity { return new HandAffinity(self::$even); }
    public static function weak(): HandAffinity { return new HandAffinity(self::$weak); }
}
