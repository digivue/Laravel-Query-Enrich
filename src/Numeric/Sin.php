<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Returns the sine of a number.
 */
class Sin extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('sin', [$this->parameter]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('sin', 'sin', 1);
    }
}
