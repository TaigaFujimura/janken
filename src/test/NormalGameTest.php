<?php
declare(strict_types=1);

namespace src\test;

use PHPUnit\Framework\TestCase;
use src\main\hand\Hand;
use src\main\hand\HandAffinity;
use src\main\rule\NormalRule;

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
        $rule = new NormalRule(1);
        $actual = $rule->battleResult($playerHand, $opponentHand);
        self::assertSame($expected, $actual);
    }

    public function gameResultDataProvider(): array
    {
        $strong = HandAffinity::strong()->get();
        $even = HandAffinity::even()->get();
        $weak = HandAffinity::weak()->get();

        return [
            '自分がグー, 相手がグーの場合' => [Hand::gu(), Hand::gu(), $even],
            '自分がグー, 相手がチョキの場合' => [Hand::gu(), Hand::choki(), $strong],
            '自分がグー, 相手がパーの場合' => [Hand::gu(), Hand::pa(), $weak],
            '自分がチョキ, 相手がグーの場合' => [Hand::choki(), Hand::gu(), $weak],
            '自分がチョキ, 相手がチョキの場合' => [Hand::choki(), Hand::choki(), $even],
            '自分がチョキ, 相手がパーの場合' => [Hand::choki(), Hand::pa(), $strong],
            '自分がパー, 相手がグーの場合' => [Hand::pa(), Hand::gu(), $strong],
            '自分がパー, 相手がチョキの場合' => [Hand::pa(), Hand::choki(), $weak],
            '自分がパー, 相手がパーの場合' => [Hand::pa(), Hand::pa(), $even],
        ];
    }
}
