<?php

namespace Dso\Onix\Tests;

use Dso\Onix\Date;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testParseYyyymmdd(): void
    {
        $date = Date::parse('20240315', '00');
        self::assertSame('2024-03-15', $date->format('Y-m-d'));
    }

    public function testParseYyyymmWithDefaultsToFirstDay(): void
    {
        $date = Date::parse('202403', '01');
        self::assertSame('2024-03-01', $date->format('Y-m-d'));
    }

    public function testParseYyyyDefaultsToJanuaryFirst(): void
    {
        $date = Date::parse('2024', '05');
        self::assertSame('2024-01-01', $date->format('Y-m-d'));
    }

    public function testParseWeekProducesRange(): void
    {
        // YYYYWW format (code 02) — each entry is a [start, end] array
        $date = Date::parse('202401', '02');
        $formatted = $date->format('Y-m-d');
        // Should contain a range of two dates separated by ' – '
        self::assertStringContainsString(' – ', $formatted);
        self::assertStringContainsString('2024-', $formatted);
    }

    public function testParseQuarterQ1(): void
    {
        // YYYYQ format (code 03) — each entry is a [start, end] array
        $date = Date::parse('20241', '03');
        $formatted = $date->format('Y-m-d');
        self::assertStringContainsString('2024-01-01', $formatted);
    }

    public function testParseRangeDateFormat(): void
    {
        // Code 06: YYYYMMDDYYYYMMDD — two separate date entries
        $date = Date::parse('2024010120241231', '06');
        $formatted = $date->format('Y-m-d');
        self::assertStringContainsString('2024-01-01', $formatted);
        self::assertStringContainsString('2024-12-31', $formatted);
    }

    public function testParseTextStringFormatCodeReturnsInput(): void
    {
        // Code 12 is "Text string" — stored as-is, format() returns it directly
        $date = Date::parse('Spring 2024', '12');
        $formatted = $date->format('Y-m-d');
        self::assertSame('Spring 2024', $formatted);
    }

    public function testParseWithDateTimeFormat(): void
    {
        // Code 13: YYYYMMDDThhmm
        $date = Date::parse('20240315T1430', '13');
        self::assertSame('2024-03-15', $date->format('Y-m-d'));
    }
}
