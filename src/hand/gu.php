<?php
class Gu implements Hand {

    public $id = 1;
    public $name = "グー";

    public function fightResult($hand){
        if($hand->id == 1) return "あいこ";
        if($hand->id == 2) return "勝ち!!!";
        if($hand->id == 3) return "負け...";
        return "Gu error: invalid hand";
    }
}
