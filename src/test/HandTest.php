<?php
declare(strict_types=1);

namespace src\test;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\main\hand\Hand;
use src\main\const\HandConst;

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
            'グー' => [Hand::gu(), HandConst::$guName],
            'チョキ' => [Hand::choki(), HandConst::$chokiName],
            'パー' => [Hand::pa(), HandConst::$paName],
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
            'グー' => [Hand::gu(), HandConst::$guId],
            'チョキ' => [Hand::choki(), HandConst::$chokiId],
            'パー' => [Hand::pa(), HandConst::$paId],
        ];
    }
}
