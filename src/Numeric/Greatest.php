<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;

/**
 * Returns the greatest value of the list of arguments.
 */
class Greatest extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        switch ($this->getDatabaseEngine()) {
            case EDatabaseEngine::MySQL:
            case EDatabaseEngine::PostgreSQL:
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('greatest', $this->parameters);
            case EDatabaseEngine::SQLServer:
                $parameters = $this->escape($this->parameters);
                $parametersString = '('.implode('),(', $parameters).')';

                return "(select max(i) from (values $parametersString) AS T(i))";
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('greatest', 'max');
    }
}
