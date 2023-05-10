<?php
class Choki implements Hand {

    public int $id = 2;
    public string $name = "チョキ";

    public function name(): string { return $this->name; }

    public function fightResult(Hand $hand): string
    {
        if($hand->id == 1) return "負け...";
        if($hand->id == 2) return "あいこ";
        if($hand->id == 3) return "勝ち!!!";
        throw new Exception("idが間違っています");
    }
}
