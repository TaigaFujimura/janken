<?php

namespace src\test;

use src\main\hand\HandAffinity;
use src\main\Game;
use PHPUnit\Framework\TestCase;
use src\main\hand\Hand;
use src\main\rule\InvincibleRule;

class InvincibleGameTest extends TestCase
{
    /**
     * @param Hand $playerHand
     * @param Hand $opponentHand
     * @param string $expected
     * @return void
     * @dataProvider invincibleGameDataProvider
     */
    public function testInvincibleGame(Hand $playerHand, Hand $opponentHand, string $expected)
    {
        $rule = new InvincibleRule();
        $game = new Game($rule);
        $actual = $game->fight($playerHand, $opponentHand);
        self::assertSame($expected, $actual);
    }

    public function invincibleGameDataProvider()
    {
        $win = HandAffinity::$strong;
        $even = HandAffinity::$even;
        $lose = HandAffinity::$weak;
        return [
            '自分がグー, 相手がグーの場合' => [Hand::gu(), Hand::gu(), $even],
            '自分がグー, 相手がチョキの場合' => [Hand::gu(), Hand::choki(), $win],
            '自分がグー, 相手がパーの場合' => [Hand::gu(), Hand::pa(), $lose],
            '自分がグー, 相手が無敵の場合' => [Hand::gu(), Hand::invincible(), $lose],
            '自分がチョキ, 相手がグーの場合' => [Hand::choki(), Hand::gu(), $lose],
            '自分がチョキ, 相手がチョキの場合' => [Hand::choki(), Hand::choki(), $even],
            '自分がチョキ, 相手がパーの場合' => [Hand::choki(), Hand::pa(), $win],
            '自分がチョキ, 相手が無敵の場合' => [Hand::choki(), Hand::invincible(), $lose],
            '自分がパー, 相手がグーの場合' => [Hand::pa(), Hand::gu(), $win],
            '自分がパー, 相手がチョキの場合' => [Hand::pa(), Hand::choki(), $lose],
            '自分がパー, 相手がパーの場合' => [Hand::pa(), Hand::pa(), $even],
            '自分がパー, 相手が無敵の場合' => [Hand::pa(), Hand::invincible(), $lose],
            '自分が無敵, 相手がグーの場合' => [Hand::invincible(), Hand::gu(), $win],
            '自分が無敵, 相手がチョキの場合' => [Hand::invincible(), Hand::choki(), $win],
            '自分が無敵, 相手がパーの場合' => [Hand::invincible(), Hand::pa(), $win],
            '自分が無敵, 相手が無敵の場合' => [Hand::invincible(), Hand::invincible(), $even],
        ];
    }
}
