<?php

namespace Dso\Onix\Tests;

use Dso\Onix\Message\Message;
use Dso\Onix\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    private static string $minimalXml;
    private static string $htmlXml;

    public static function setUpBeforeClass(): void
    {
        self::$minimalXml = file_get_contents(__DIR__ . '/fixtures/minimal.xml');
        self::$htmlXml    = file_get_contents(__DIR__ . '/fixtures/html_text.xml');
    }

    public function testParseStringReturnsMessage(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        self::assertInstanceOf(Message::class, $message);
    }

    public function testParserRejectsUnsupportedLanguage(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new Parser('xx');
    }

    public function testHeaderSenderName(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        self::assertSame('Test Publisher', $message->getHeader()->getSender()->getSenderName());
    }

    public function testHeaderContactName(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        self::assertSame('Jane Doe', $message->getHeader()->getSender()->getContactName());
    }

    public function testHeaderEmailAddress(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        self::assertSame('jane@example.com', $message->getHeader()->getSender()->getEmailAddress());
    }

    public function testMessageHasProducts(): void
    {
        $parser   = new Parser();
        $message  = $parser->parseString(self::$minimalXml);
        $products = $message->getProducts();
        self::assertCount(1, $products);
    }

    public function testProductRecordReference(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        $product = $message->getProducts()[0];
        self::assertSame('978-3-16-148410-0', $product->getRecordReference());
    }

    public function testProductNotificationType(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        $product = $message->getProducts()[0];
        self::assertSame('03', $product->getNotificationType()->getCode());
    }

    public function testSentDateTime(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$minimalXml);
        $date    = $message->getHeader()->getSentDateTime();
        self::assertSame('2024-03-15', $date->format('Y-m-d'));
    }

    public function testHtmlTextParsing(): void
    {
        $parser  = new Parser();
        $message = $parser->parseString(self::$htmlXml);
        self::assertInstanceOf(Message::class, $message);
    }

    public function testParserAcceptsAllSupportedLanguages(): void
    {
        foreach (['en', 'es', 'de', 'fr', 'it', 'nb', 'tr'] as $lang) {
            $parser  = new Parser($lang);
            $message = $parser->parseString(self::$minimalXml);
            self::assertInstanceOf(Message::class, $message);
        }
    }
}
