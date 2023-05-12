<?php

namespace src\test;

use src\main\hand\definition\NormalHandDefinition;
use src\main\hand\HandAffinity;
use src\main\hand\Hand;
use PHPUnit\Framework\TestCase;

class NormalAffinityTest extends TestCase
{
    /**
     * @param HandAffinity $expected
     * @param Hand $player
     * @param Hand ...$opponents
     * @return void
     * @dataProvider compareDataProvider
     */
    public function testCompare(HandAffinity $expected, Hand $player, Hand ...$opponents)
    {
        $definition = new NormalHandDefinition();
        $actual = $definition->affinity($player, ...$opponents);
        self::assertSame($expected->get(), $actual->get());
    }

    public function compareDataProvider(): array
    {
        $strong = HandAffinity::strong();
        $even = HandAffinity::even();
        $weak = HandAffinity::weak();

        return [
            '自分: グー, 相手1: グー' => [$even, Hand::gu(), Hand::gu()],
            '自分: グー, 相手1: グー, 相手2: グー' => [$even, Hand::gu(), Hand::gu(), Hand::gu()],
            '自分: グー, 相手1: グー, 相手2: チョキ' => [$strong, Hand::gu(), Hand::gu(), Hand::choki()],
            '自分: グー, 相手1: グー, 相手2: パー' => [$weak, Hand::gu(), Hand::gu(), Hand::pa()],
            '自分: チョキ, 相手1: グー, 相手2: グー' => [$weak, Hand::choki(), Hand::gu(), Hand::gu()],
            '自分: チョキ, 相手1: グー, 相手2: チョキ' => [$weak, Hand::choki(), Hand::gu(), Hand::choki()],
            '自分: チョキ, 相手1: グー, 相手2: パー' => [$even, Hand::choki(), Hand::gu(), Hand::pa()],
            '自分: パー, 相手1: グー, 相手2: グー' => [$strong, Hand::pa(), Hand::gu(), Hand::gu()],
            '自分: パー, 相手1: グー, 相手2: チョキ' => [$even, Hand::pa(), Hand::gu(), Hand::choki()],
            '自分: パー, 相手1: グー, 相手2: パー' => [$strong, Hand::pa(), Hand::gu(), Hand::pa()],
        ];
    }
}
