# dateDiff

The `dateDiff` function is used to calculate the difference in days between two date values. It takes two
parameters, `$date1` and `$date2`, representing the two dates for which you want to find the difference.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$book = Book::select(
    'id',
    'name',
    QE::dateDiff(c('published_at'), c('created_at'))->as('days_took_to_publish')
)->first();
```