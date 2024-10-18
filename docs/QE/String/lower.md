# lower

The `lower` method, as part of the String namespace, is a static method designed to convert a given string to lowercase.
It takes a single parameter, `$parameter`, representing the string that you want to convert to lowercase.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$books = Book::select(
    'id',
    QE::lower(c('title'))->as('title')
)->get();
```