<?php

namespace Dso\Onix\Tests;

use Dso\Onix\Exception\InvalidTextFormatException;
use Dso\Onix\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testDefaultFormatToString(): void
    {
        $text = new Text('Hello world');
        self::assertSame('Hello world', (string) $text);
    }

    public function testToPlainWithDefaultFormat(): void
    {
        $text = new Text('Hello world', Text::TYPE_DEFAULT);
        self::assertSame('Hello world', $text->toPlain());
    }

    public function testToPlainWithAsciiFormat(): void
    {
        $text = new Text('Hello world', Text::TYPE_ASCII);
        self::assertSame('Hello world', $text->toPlain());
    }

    public function testToPlainStripsHtmlTags(): void
    {
        $text = new Text('<p>Hello <strong>world</strong></p>', Text::TYPE_HTML);
        self::assertSame('Hello world', $text->toPlain());
    }

    public function testToPlainConvertsBrToNewline(): void
    {
        $text = new Text('Line one<br>Line two', Text::TYPE_HTML);
        self::assertSame("Line one\nLine two", $text->toPlain());
    }

    public function testToHtmlReturnsContentDirectlyForHtml(): void
    {
        $html = '<p>Already <em>HTML</em></p>';
        $text = new Text($html, Text::TYPE_HTML);
        self::assertSame($html, $text->toHtml());
    }

    public function testToHtmlReturnsContentDirectlyForXhtml(): void
    {
        $html = '<p>XHTML content</p>';
        $text = new Text($html, Text::TYPE_XHTML);
        self::assertSame($html, $text->toHtml());
    }

    public function testToHtmlWrapsPlainTextInParagraph(): void
    {
        $text = new Text('Simple text', Text::TYPE_DEFAULT);
        self::assertSame('<p>Simple text</p>', $text->toHtml());
    }

    public function testToHtmlConvertsTwoNewlinesToParagraphBreak(): void
    {
        $text = new Text("Para one\n\nPara two", Text::TYPE_DEFAULT);
        self::assertSame('<p>Para one</p><p>Para two</p>', $text->toHtml());
    }

    public function testToHtmlConvertsSingleNewlineToBr(): void
    {
        $text = new Text("Line one\nLine two", Text::TYPE_DEFAULT);
        self::assertSame('<p>Line one<br>Line two</p>', $text->toHtml());
    }

    public function testToHtmlEscapesSpecialCharacters(): void
    {
        $text = new Text('5 < 10 & 3 > 1', Text::TYPE_DEFAULT);
        self::assertSame('<p>5 &lt; 10 &amp; 3 &gt; 1</p>', $text->toHtml());
    }

    public function testLanguageParameter(): void
    {
        $text = new Text('Hallo', Text::TYPE_DEFAULT, 'de');
        self::assertSame('Hallo', (string) $text);
    }

    public function testInvalidFormatThrowsException(): void
    {
        $this->expectException(InvalidTextFormatException::class);
        new Text('content', '99');
    }
}
