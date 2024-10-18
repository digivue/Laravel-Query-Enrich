# floor

The `floor` function is used to round a given number up to the biggest integer that is less than or equal to the
original number. It takes a single parameter, `$parameter`, which represents the number to be rounded up.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$books = Book::select(
    QE::floor(c('price'))->as('price_floor')
)->get();
```