<?php

namespace Dso\Onix\Tests\Normalizer;

use Dso\Onix\Normalizer\ShortTagNameConverter;
use PHPUnit\Framework\TestCase;

class ShortTagNameConverterTest extends TestCase
{
    private ShortTagNameConverter $converter;

    protected function setUp(): void
    {
        $this->converter = new ShortTagNameConverter();
    }

    public function testDenormalizeConvertsShortToRef(): void
    {
        self::assertSame('NotificationType', $this->converter->denormalize('a002'));
        self::assertSame('RecordReference', $this->converter->denormalize('a001'));
        self::assertSame('ProductForm', $this->converter->denormalize('b012'));
    }

    public function testDenormalizeReturnsOriginalForUnknownTag(): void
    {
        self::assertSame('UnknownTag', $this->converter->denormalize('UnknownTag'));
    }

    public function testNormalizeConvertsRefToShort(): void
    {
        self::assertSame('a002', $this->converter->normalize('NotificationType'));
        self::assertSame('a001', $this->converter->normalize('RecordReference'));
    }

    public function testNormalizeReturnsOriginalForUnknownRef(): void
    {
        self::assertSame('UnknownRef', $this->converter->normalize('UnknownRef'));
    }

    public function testDenormalizeRefTagPassthrough(): void
    {
        // Ref-format tags not in map should pass through unchanged
        self::assertSame('ONIXMessage', $this->converter->denormalize('ONIXmessage'));
    }
}
