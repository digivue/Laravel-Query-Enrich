# cos

The `cos` function is utilized to calculate and return the cosine of a given number, represented by the
parameter `$parameter`.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;

$queryResult = DB::selectOne(
    'select ' . QE::cos($x)->as('cos'),
);
```