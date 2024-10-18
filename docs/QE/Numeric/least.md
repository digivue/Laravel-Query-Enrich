# least

The `least` function is designed to determine and return the least value from a list of arguments. It takes a variable
number of parameters, representing the values to be compared, and it returns the least among them.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;

$queryResult = DB::selectOne(
    'select ' . QE::least($x, $y, $z)->as('least'),
);
```