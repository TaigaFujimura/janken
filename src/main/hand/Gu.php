<?php
declare(strict_types=1);

namespace src\main\hand;

use Exception;

class Gu implements Hand
{

    private int $id = 1;
    private string $name = "グー";

    public function id(): int { return $this->id; }

    public function name(): string { return $this->name; }

    public function fightResult(Hand $hand): string
    {
        if($hand->id() == 1) return "あいこ";
        if($hand->id() == 2) return "勝ち!!!";
        if($hand->id() == 3) return "負け...";
        throw new Exception("idが間違っています");
    }
}
