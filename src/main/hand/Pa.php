<?php
declare(strict_types=1);

namespace src\main\hand;

use Exception;

class Pa implements Hand
{

    private int $id = 3;
    private string $name = "パー";

    public function id(): int { return $this->id; }

    public function name(): string { return $this->name; }

    public function fightResult(Hand $hand): string
    {
        if($hand->id() == 1) return "勝ち!!!";
        if($hand->id() == 2) return "負け...";
        if($hand->id() == 3) return "あいこ";
        throw new Exception("idが間違っています");
    }
}
