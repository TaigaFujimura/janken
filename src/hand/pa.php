<?php
class Pa implements Hand {

    public int $id = 3;
    public string $name = "パー";

    public function name(): string { return $this->name; }

    public function fightResult(Hand $hand): string
    {
        if($hand->id == 1) return "勝ち!!!";
        if($hand->id == 2) return "負け...";
        if($hand->id == 3) return "あいこ";
        throw new Exception("idが間違っています");
    }
}
