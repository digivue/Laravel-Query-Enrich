# multiply

The `multiply` method, as part of the Numeric namespace, is a static method designed to multiply multiple numeric
parameters. It takes a variable number of parameters, representing the values to be multiplied together.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$books = Book::select(
    'id',
    'name',
    'price',
    QE::multiply(c('price'), 0.25)->as('tax')
)->get();
```