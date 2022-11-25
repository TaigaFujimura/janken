<?php
class Pa implements Hand {

    public $id = 3;
    public $name = "パー";

    public function fightResult($hand){
        if($hand->id == 1) return "勝ち!!!";
        if($hand->id == 2) return "負け...";
        if($hand->id == 3) return "あいこ";
        return "Pa error: invalid hand";
    }
}
