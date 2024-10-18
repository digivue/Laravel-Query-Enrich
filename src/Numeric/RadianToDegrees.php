<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;

/**
 * Converts a value in radians to degrees.
 */
class RadianToDegrees extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
            case EDatabaseEngine::PostgreSQL:
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('degrees', [$this->parameter]);
            case EDatabaseEngine::SQLServer:
                $parameter = $this->escape($this->parameter);

                return "$parameter * (180 / pi())";
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('degrees', 'rad2deg', 1);
    }
}
