<?php
declare(strict_types=1);

namespace src\test;

use PHPUnit\Framework\TestCase;
use src\main\const\FightResult;
use src\main\rule\NormalRule;
use src\main\Game;
use src\main\hand\Hand;

class NormalGameTest extends TestCase
{
    /**
     * @param Hand $playerHand
     * @param Hand $opponentHand
     * @param $expected
     * @return void
     * @dataProvider gameResultDataProvider
     */
    public function testGameResult(Hand $playerHand, Hand $opponentHand, $expected): void
    {
        $rule = new NormalRule();
        $game = new Game($rule);
        $actual = $game->fight($playerHand, $opponentHand);
        self::assertSame($expected, $actual);
    }

    public function gameResultDataProvider(): array
    {
        $win = FightResult::$win;
        $even = FightResult::$even;
        $lose = FightResult::$lose;

        return [
            '自分がグー, 相手がグーの場合' => [Hand::gu(), Hand::gu(), $even],
            '自分がグー, 相手がチョキの場合' => [Hand::gu(), Hand::choki(), $win],
            '自分がグー, 相手がパーの場合' => [Hand::gu(), Hand::pa(), $lose],
            '自分がチョキ, 相手がグーの場合' => [Hand::choki(), Hand::gu(), $lose],
            '自分がチョキ, 相手がチョキの場合' => [Hand::choki(), Hand::choki(), $even],
            '自分がチョキ, 相手がパーの場合' => [Hand::choki(), Hand::pa(), $win],
            '自分がパー, 相手がグーの場合' => [Hand::pa(), Hand::gu(), $win],
            '自分がパー, 相手がチョキの場合' => [Hand::pa(), Hand::choki(), $lose],
            '自分がパー, 相手がパーの場合' => [Hand::pa(), Hand::pa(), $even],
        ];
    }
}
