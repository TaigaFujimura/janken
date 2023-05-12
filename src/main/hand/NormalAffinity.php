<?php
declare(strict_types=1);

namespace src\main\hand;

use src\main\const\HandConst;
use src\main\const\FightResult;
use PHPUnit\Util\Exception;

class NormalAffinity
{
    public function compare(Hand $playerHand, Hand $opponentHand): string
    {
        $playerHandId = $playerHand->id();
        $opponentHandId = $opponentHand->id();

        $guId = HandConst::$guId;
        $chokiId = HandConst::$chokiId;
        $paId = HandConst::$paId;

        $win = FightResult::$win;
        $even = FightResult::$even;
        $lose = FightResult::$lose;

        if($playerHandId === $guId) {
            if ($opponentHandId === $guId) return $even;
            if ($opponentHandId === $chokiId) return $win;
            if ($opponentHandId === $paId) return $lose;
        }

        if($playerHandId === $chokiId) {
            if ($opponentHandId === $guId) return $lose;
            if ($opponentHandId === $chokiId) return $even;
            if ($opponentHandId === $paId) return $win;
        }

        if($playerHandId === $paId) {
            if ($opponentHandId === $guId) return $win;
            if ($opponentHandId === $chokiId) return $lose;
            if ($opponentHandId === $paId) return $even;
        }

        throw new Exception("error: NormalAffinity");
    }
}