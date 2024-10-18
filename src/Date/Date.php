<?php

namespace digivue\LaravelQueryEnrich\Date;

use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;

/**
 * Extracts the date part from a date/datetime expression.
 */
class Date extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        if ($this->getDatabaseEngine() == EDatabaseEngine::SQLServer) {
            $parameter = $this->escape($this->parameter);

            return "cast($parameter as date)";
        }

        return $this->getFunctionCallSql('date', [$this->parameter]);
    }
}
