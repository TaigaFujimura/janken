<?php

namespace src\main\hand;

use PHPUnit\Util\Exception;
use src\main\const\FightResult;
use src\main\const\HandConst;

class InvincibleAffinity
{
    public function compare(Hand $playerHand, Hand $opponentHand): string
    {
        $playerHandId = $playerHand->id();
        $opponentHandId = $opponentHand->id();

        $guId = HandConst::$guId;
        $chokiId = HandConst::$chokiId;
        $paId = HandConst::$paId;
        $invincibleId = HandConst::$invincibleId;

        $win = FightResult::$win;
        $even = FightResult::$even;
        $lose = FightResult::$lose;

        if($playerHandId === $guId) {
            if ($opponentHandId === $guId) return $even;
            if ($opponentHandId === $chokiId) return $win;
            if ($opponentHandId === $paId) return $lose;
            if ($opponentHandId === $invincibleId) return $lose;
        }

        if($playerHandId === $chokiId) {
            if ($opponentHandId === $guId) return $lose;
            if ($opponentHandId === $chokiId) return $even;
            if ($opponentHandId === $paId) return $win;
            if ($opponentHandId === $invincibleId) return $lose;
        }

        if($playerHandId === $paId) {
            if ($opponentHandId === $guId) return $win;
            if ($opponentHandId === $chokiId) return $lose;
            if ($opponentHandId === $paId) return $even;
            if ($opponentHandId === $invincibleId) return $lose;
        }

        if ($playerHandId === $invincibleId) {
            if ($opponentHandId === $invincibleId) return $even;
            return $win;
        }

        throw new Exception("error: NormalAffinity");
    }
}