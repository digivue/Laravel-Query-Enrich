# upper

The `upper` method, within the String namespace, is a static function designed to convert a given string to uppercase.
It takes a single parameter, `$parameter`, representing the string that you want to convert to uppercase.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$books = Book::select(
    'id',
    QE::upper(c('title'))->as('title')
)->get();
```