# minute

The `minute` function you provided is similar in purpose to [Carbon](https://carbon.nesbot.com/){:target="_blank"}'s
minute method. Both are used to retrieve the minute part for a given time or datetime.

## Example Usage

```php
use digivue\LaravelQueryEnrich\QE;
use function digivue\LaravelQueryEnrich\c;

$book = Book::select(
    'id',
    'name',
    QE::minute(c('published_at'))->as('published_minute')
)->first();
```