<?php

namespace digivue\LaravelQueryEnrich\String;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;

/**
 *  Reverses the characters of a string.
 */
class Reverse extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('reverse', [$this->parameter]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('reverse', 'strrev', 1);
    }
}
