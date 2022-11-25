<?php
class Choki implements Hand {

    public $id = 2;
    public $name = "チョキ";

    public function fightResult($hand){
        if($hand->id == 1) return "負け...";
        if($hand->id == 2) return "あいこ";
        if($hand->id == 3) return "勝ち!!!";
        return "Choki error: invalid hand";
    }
}
