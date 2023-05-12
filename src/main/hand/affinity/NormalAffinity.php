<?php
declare(strict_types=1);

namespace src\main\hand\affinity;

use src\main\const\HandConst;
use src\main\const\FightResult;
use PHPUnit\Util\Exception;
use src\main\hand\Hand;

class NormalAffinity implements Affinity
{
    public function compare(Hand $playerHand, Hand ...$opponentHands): string
    {
        $playerHandId = $playerHand->id();

        $guId = HandConst::$guId;
        $chokiId = HandConst::$chokiId;
        $paId = HandConst::$paId;

        $win = FightResult::$win;
        $even = FightResult::$even;
        $lose = FightResult::$lose;

        $existGu = $this->existHand($guId, ...$opponentHands);
        $existChoki = $this->existHand($chokiId, ...$opponentHands);
        $existPa = $this->existHand($paId, ...$opponentHands);

        // チョキもパーもいるならあいこ
        // チョキもパーもいなければあいこ
        // チョキがいるならグー VS チョキで勝ち
        // パーがいるならグー VS パーで負け
        if($playerHandId === $guId) {
            if($existChoki && $existPa) return $even;
            if(!$existChoki && !$existPa) return $even;
            if($existChoki) return $win;
            if($existPa) return $lose;
            throw new Exception("error: AffinityMultiple.php => if(\$playerHandId === \$guId) {}");
        }

        if($playerHandId === $chokiId) {
            if($existGu && $existPa) return $even;
            if(!$existGu && !$existPa) return $even;
            if($existGu) return $lose;
            if($existPa) return $win;
            throw new Exception("error: AffinityMultiple.php => if(\$playerHandId === \$chokiId) {}");
        }

        if($playerHandId === $paId) {
            if($existChoki && $existGu) return $even;
            if(!$existChoki && !$existGu) return $even;
            if($existChoki) return $lose;
            if($existGu) return $win;
            throw new Exception("AffinityMultiple.php => if(\$playerHandId === \$paId) {}");
        }

        throw new Exception("error: AffinityMultiple");
    }

    private function existHand(int $handId, Hand ...$opponents): bool
    {
        $list = array_filter($opponents, function ($hand) use($handId){
            return $hand->id() === $handId;
        });
        return 0 < count($list);
    }
}