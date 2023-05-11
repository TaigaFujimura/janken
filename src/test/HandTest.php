<?php
declare(strict_types=1);

namespace src\test\hand;

use PHPUnit\Framework\TestCase;
use src\main\hand\Hand;
use src\main\hand\Gu;
use src\main\hand\Choki;
use src\main\hand\Pa;

class HandTest extends TestCase
{
    /**
     * @param Hand $hand
     * @param string $expected
     * @return void
     * @dataProvider nameDataProvider
     */
    public function testName(Hand $hand, string $expected)
    {
        $actual = $hand->name();
        self::assertSame($expected, $actual);
    }

    public function nameDataProvider(): array
    {
        return [
            'グー' => [new Gu(), 'グー'],
            'チョキ' => [new Choki(), 'チョキ'],
            'パー' => [new Pa(), 'パー'],
        ];
    }

    /**
     * @param Hand $hand
     * @param int $expected
     * @return void
     * @dataProvider idDataProvider
     */
    public function testId(Hand $hand, int $expected)
    {
        $actual = $hand->id();
        self::assertSame($expected, $actual);
    }

    public function idDataProvider(): array
    {
        return [
            'グー' => [new Gu(), 1],
            'チョキ' => [new Choki(), 2],
            'パー' => [new Pa(), 3],
        ];
    }
}
