<?php

namespace digivue\LaravelQueryEnrich\Date;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;
use digivue\LaravelQueryEnrich\QE;

/**
 * Returns the name of the month for a given date/datetime.
 */
class MonthName extends DBFunction
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
            case EDatabaseEngine::SQLite:
                return $this->getFunctionCallSql('monthname', [$this->parameter]);
            case EDatabaseEngine::PostgreSQL:
                $parameter = $this->escape($this->parameter);

                return "initcap(trim(to_char($parameter, 'month')))";
            case EDatabaseEngine::SQLServer:
                return $this->getFunctionCallSql('datename', [QE::raw('month'), $this->parameter]);
        }
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('monthname', function ($parameter) {
            return Carbon::parse($parameter)->monthName;
        }, 1);
    }
}
