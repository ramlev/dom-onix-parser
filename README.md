# PHP ONIX 3.0 Parser

A PHP library for reading ONIX 3.0 files in both Short and Ref tag formats. Text elements in different formats and ONIX date formats are automatically parsed. Code list values are resolved to human-readable strings.

**This library is under active development. Most fields are detected and parsed, but some still need work.**

## Requirements

- PHP >= 8.3
- Symfony Serializer ^7.4

## Installation

```
composer require ramlev/dom-onix-parser
```

## Usage

```php
$parser = new \Dso\Onix\Parser();

/** @var \Dso\Onix\Message\Message */
$message = $parser->parseString(file_get_contents('sample.xml'));

/** @var \Dso\Onix\Product\Product[] */
$products = $message->getProducts();
```

## Code Lists

All code lists from **issue 61** are included. Codes in the ONIX file are automatically resolved to their human-readable values.

```xml
<Product>
    <NotificationType>03</NotificationType>
</Product>
```

```php
$type = $product->getNotificationType();

$type->getCode();   // "03"
$type->getValue();  // "Notification confirmed on publication"
(string) $type;     // "Notification confirmed on publication"
```

### Multi-Language Code Lists

Pass a language code to the parser constructor to get code list values in that language:

```php
$parser = new \Dso\Onix\Parser('de');
```

| Language          | Code |
|-------------------|------|
| English (default) | `en` |
| Spanish           | `es` |
| German            | `de` |
| French            | `fr` |
| Italian           | `it` |
| Norwegian         | `nb` |
| Turkish           | `tr` |

> Code lists were scraped from the [EDITEUR website](https://ns.editeur.org/onix/en). Some translations may be incomplete or inaccurate — pull requests are welcome.

## Text Content

Text fields are returned as `Text` objects and support multiple ONIX text formats (plain, HTML, XHTML, XML):

```php
$text = $textContent->getText();

(string) $text;     // raw content
$text->toPlain();   // strips HTML tags, converts <br> to newlines
$text->toHtml();    // returns HTML; wraps plain text in <p> tags
```

## Dates

Date fields are returned as `Date` objects and support all ONIX date format codes (CodeList 55), including ranges, weeks, quarters and seasons:

```php
$date = $publishingDate->getDate();

$date->format('Y-m-d');         // e.g. "2024-03-15"
$date->format('d. F Y');        // e.g. "15. March 2024"
```

## Measurements

```php
$detail = $product->getDescriptiveDetail();

// Loop all measures
foreach ($detail->getMeasures() as $measure) {
    echo sprintf('%s: %s %s',
        (string) $measure->getMeasureType(),    // e.g. "Height"
        $measure->getMeasurement(),             // e.g. "210"
        (string) $measure->getMeasureUnitCode() // e.g. "Centimeters"
    );
}

// Shorthand helpers
$detail->getHeight();
$detail->getWidth();
$detail->getThickness();
$detail->getWeight();
```

## Running Tests

```
composer test
```

## Built With

- [Symfony Serializer](https://symfony.com/doc/current/components/serializer.html)

## License

MIT — see [LICENSE](LICENSE).
