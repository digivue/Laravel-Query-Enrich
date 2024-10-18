<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Returns the value of PI.
 */
class PI extends DBFunction
{
    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('pi');
    }

    public function configureForSqlite(): void
    {
        DB::connection()->getPdo()->sqliteCreateFunction('pi', 'pi', 0);
    }
}
