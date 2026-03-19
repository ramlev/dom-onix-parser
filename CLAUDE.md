# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

`ramlev/dom-onix-parser` is a PHP library for parsing ONIX 3.0 XML files (both Short and Ref tag formats) into PHP objects. It uses the Symfony Serializer component internally.

## Commands

```bash
# Install dependencies
composer install

# Run tests (none exist yet — this is a library with no test suite)

# Validate composer.json
composer validate

# Autoload dump
composer dump-autoload
```

## Architecture

### Entry Point

`Parser::parseString(string $xml, string $language = 'en'): Message` is the single public API. It builds a Symfony serializer with four custom components and deserializes the raw XML into a `Message` object.

### Symfony Serializer Stack

The parser composes:
- **`ONIXEncoder`** — extends `XmlEncoder`; wraps HTML/XML/XHTML text formats in CDATA sections
- **`ShortTagNameConverter`** — maps 450+ ONIX short tag names (e.g. `b004`) to their Ref equivalents (e.g. `NotificationType`) so both formats are handled transparently
- **`CodeListNormalizer`**, **`DateNormalizer`**, **`TextNormalizer`** — custom denormalizers that intercept specific ONIX types during deserialization

### Domain Model

```
Message
├── Header (sender, sent date, message number)
└── Product[]
    ├── DescriptiveDetail   (form, measures, titles, contributors, languages…)
    ├── CollateralDetail    (text content, supporting resources…)
    ├── PublishingDetail    (publisher, imprint, dates, status…)
    └── ProductSupply       (markets, supply details, pricing…)
```

All leaf nodes that carry ONIX-coded values are instances of a `CodeList` subclass (e.g. `CodeList1`, `CodeList7`). Formatted text fields become `Text` objects; date strings become `Date` objects.

### CodeLists (`src/CodeList/`)

200+ classes, one per ONIX code list. Each holds static arrays keyed by language code (`en`, `es`, `de`, `fr`, `it`, `nb`, `tr`) and a `resolve(string $code, string $lang): string` method. `CodeListNormalizer` uses the language selected at `Parser` instantiation to resolve codes.

### Value Objects

- **`Text`** — wraps a string with a format code (HTML 02, XML 03, XHTML 05, ASCII 00, default 06). `toPlain()` strips tags; `toHtml()` converts to HTML; `__toString()` returns the raw value.
- **`Date`** — parses ONIX date strings using CodeList 55 format codes. Supports ranges, weeks, quarters, seasons, and time components.

### Namespace

`Dso\Onix\` → `src/` (PSR-4).
