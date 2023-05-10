<?php
class Gu implements Hand {

    public int $id = 1;
    public string $name = "グー";

    public function name(): string { return $this->name; }

    public function fightResult(Hand $hand): string
    {
        if($hand->id == 1) return "あいこ";
        if($hand->id == 2) return "勝ち!!!";
        if($hand->id == 3) return "負け...";
        throw new Exception("idが間違っています");
    }
}
