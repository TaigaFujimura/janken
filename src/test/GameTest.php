<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use src\main\Game;
use src\main\hand\Hand;
use src\main\hand\Gu;
use src\main\hand\Choki;
use src\main\hand\Pa;

class GameTest extends TestCase
{
    /**
     * @param Hand $playerHand
     * @param Hand $opponentHand
     * @param $expected
     * @return void
     * @dataProvider gameResultDataProvider
     */
    public function testGameResult(Hand $playerHand, Hand $opponentHand, $expected)
    {
        $game = new Game();
        $actual = $game->result($playerHand, $opponentHand);
        self::assertSame($expected, $actual);
    }

    public function gameResultDataProvider(): array
    {
        return [
            '自分がグー, 相手がグーの場合' => [new Gu(), new Gu(), 'あいこ'],
            '自分がグー, 相手がチョキの場合' => [new Gu(), new Choki(), '勝ち!!!'],
            '自分がグー, 相手がパーの場合' => [new Gu(), new Pa(), '負け...'],
            '自分がチョキ, 相手がグーの場合' => [new Choki(), new Gu(), '負け...'],
            '自分がチョキ, 相手がチョキの場合' => [new Choki(), new Choki(), 'あいこ'],
            '自分がチョキ, 相手がパーの場合' => [new Choki(), new Pa(), '勝ち!!!'],
            '自分がパー, 相手がグーの場合' => [new Pa(), new Gu(), '勝ち!!!'],
            '自分がパー, 相手がチョキの場合' => [new Pa(), new Choki(), '負け...'],
            '自分がパー, 相手がパーの場合' => [new Pa(), new Pa(), 'あいこ'],
        ];
    }
}
