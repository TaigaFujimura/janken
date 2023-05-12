<?php
declare(strict_types=1);

namespace src\test;

use PHPUnit\Framework\TestCase;
use src\main\hand\Hand;
use src\main\hand\HandProperty;

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
            'グー' => [Hand::gu(), HandProperty::$guName],
            'チョキ' => [Hand::choki(), HandProperty::$chokiName],
            'パー' => [Hand::pa(), HandProperty::$paName],
            '無敵' => [Hand::invincible(), HandProperty::$invincibleName],
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
            'グー' => [Hand::gu(), HandProperty::$guId],
            'チョキ' => [Hand::choki(), HandProperty::$chokiId],
            'パー' => [Hand::pa(), HandProperty::$paId],
            '無敵' => [Hand::invincible(), HandProperty::$invincibleId],
        ];
    }
}
