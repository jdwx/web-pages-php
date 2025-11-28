# jdwx/web-pages

PHP module for building up simple pages (e.g., for error messages)

## Installation

You can require it directly with Composer:

```bash
composer require jdwx/web-pages
```

Or download the source from GitHub: https://github.com/jdwx/web-pages-php.git

## Requirements

This module requires PHP 8.3 or later.

## Usage

This module provides simplified ways to build various types of responses. It's mostly used for error pages or other places where a full application context may not be available or appropriate.

Here's a simple example:

```php
$page = new SimpleHtmlPage();
$page->setTitle( 'Example Page' );
$page->addContent( '<p>This is an example page.</p>' );
echo $page;
```

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Example Page</title>
    <meta charset="UTF-8">
</head>
<body><p>This is an example page.</p></body>
</html>
```

(It won't be formatted quite like this because the editor for this file automatically reformats.)

## Stability

This module is considered stable and is extensively used in production code, but in relatively low volume due to the nature of the functionality it provides.

The module has complete test coverage.

## History

This module was refactored out of the jdwx/web-php module in November 2025.
