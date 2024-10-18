# add

The `add` function is used to add multiple numeric parameters. It takes a variable number of parameters, and it adds all
the numeric values together.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$books = Book::select(
    'id',
    'name',
    'price',
    QE::add(c('price'), c('discount'))->as('actual_price')
)->get();
```