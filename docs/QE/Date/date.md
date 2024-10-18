# date

The `date` function is used to extract the date part from a datetime expression. It takes a single parameter,
`$parameter`, which represents the original datetime expression.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$book = Book::select(
    'id',
    'name',
    QE::date(c('published_at'))->as('published_date')
)->first();
```