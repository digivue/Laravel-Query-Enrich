<?php

namespace digivue\LaravelQueryEnrich\String;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;

/**
 * Extracts a number of characters from a string (starting from left).
 */
class Left extends DBFunction
{
    private mixed $string;
    private mixed $numberOfChars;

    public function __construct(mixed $string, mixed $numberOfChars)
    {
        $this->string = $string;
        $this->numberOfChars = $numberOfChars;
    }

    protected function getQuery(): string
    {
        if ($this->getDatabaseEngine() == EDatabaseEngine::SQLite) {
            return $this->getFunctionCallSql('leftstr', [$this->string, $this->numberOfChars]);
        }

        return $this->getFunctionCallSql('left', [$this->string, $this->numberOfChars]);
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('leftstr', function ($string, $numberOfChars) {
            return substr($string, 0, $numberOfChars);
        }, 2);
    }
}
