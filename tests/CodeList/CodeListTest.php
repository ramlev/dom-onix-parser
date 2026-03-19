<?php

namespace Dso\Onix\Tests\CodeList;

use Dso\Onix\CodeList\CodeList1;
use Dso\Onix\CodeList\CodeList55;
use Dso\Onix\Exception\InvalidCodeListCodeException;
use Dso\Onix\Exception\InvalidCodeListLanguageException;
use PHPUnit\Framework\TestCase;

class CodeListTest extends TestCase
{
    public function testResolveReturnsCodeListInstance(): void
    {
        $result = CodeList1::resolve('03');
        self::assertInstanceOf(CodeList1::class, $result);
    }

    public function testResolveGetCode(): void
    {
        $result = CodeList1::resolve('03');
        self::assertSame('03', $result->getCode());
    }

    public function testResolveGetValue(): void
    {
        $result = CodeList1::resolve('03');
        self::assertNotEmpty($result->getValue());
    }

    public function testToStringReturnsValue(): void
    {
        $result = CodeList1::resolve('03');
        self::assertSame($result->getValue(), (string) $result);
    }

    public function testResolveWithExplicitLanguage(): void
    {
        $en = CodeList55::resolve('00', 'en');
        self::assertSame('YYYYMMDD', $en->getValue());
    }

    public function testResolveWithDifferentLanguages(): void
    {
        $en = CodeList55::resolve('12', 'en');
        $nb = CodeList55::resolve('12', 'nb');

        self::assertSame('Text string', $en->getValue());
        self::assertSame('Tekststreng', $nb->getValue());
    }

    public function testInvalidCodeThrowsException(): void
    {
        $this->expectException(InvalidCodeListCodeException::class);
        CodeList1::resolve('999');
    }

    public function testInvalidLanguageThrowsException(): void
    {
        $this->expectException(InvalidCodeListLanguageException::class);
        CodeList1::resolve('03', 'zz');
    }
}
