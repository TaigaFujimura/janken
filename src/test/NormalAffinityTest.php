<?php

namespace src\test;

use src\main\const\FightResult;
use src\main\hand\Hand;
use src\main\rule\AffinityMultiple;
use PHPUnit\Framework\TestCase;

class NormalAffinityTest extends TestCase
{
    /**
     * @param string $expected
     * @param Hand $player
     * @param Hand ...$opponents
     * @return void
     * @dataProvider compareDataProvider
     */
    public function testCompare(string $expected, Hand $player, Hand ...$opponents)
    {
        $affinity = new AffinityMultiple();
        $actual = $affinity->compare($player, ...$opponents);
        self::assertSame($expected, $actual);
    }

    public function compareDataProvider(): array
    {
        return [
            '自分: グー, 相手1: グー' => [FightResult::$even, Hand::gu(), Hand::gu()],
            '自分: グー, 相手1: グー, 相手2: グー' => [FightResult::$even, Hand::gu(), Hand::gu(), Hand::gu()],
            '自分: グー, 相手1: グー, 相手2: チョキ' => [FightResult::$win, Hand::gu(), Hand::gu(), Hand::choki()],
            '自分: グー, 相手1: グー, 相手2: パー' => [FightResult::$lose, Hand::gu(), Hand::gu(), Hand::pa()],
            '自分: チョキ, 相手1: グー, 相手2: グー' => [FightResult::$lose, Hand::choki(), Hand::gu(), Hand::gu()],
            '自分: チョキ, 相手1: グー, 相手2: チョキ' => [FightResult::$lose, Hand::choki(), Hand::gu(), Hand::choki()],
            '自分: チョキ, 相手1: グー, 相手2: パー' => [FightResult::$even, Hand::choki(), Hand::gu(), Hand::pa()],
            '自分: パー, 相手1: グー, 相手2: グー' => [FightResult::$win, Hand::pa(), Hand::gu(), Hand::gu()],
            '自分: パー, 相手1: グー, 相手2: チョキ' => [FightResult::$even, Hand::pa(), Hand::gu(), Hand::choki()],
            '自分: パー, 相手1: グー, 相手2: パー' => [FightResult::$win, Hand::pa(), Hand::gu(), Hand::pa()],
        ];
    }
}
