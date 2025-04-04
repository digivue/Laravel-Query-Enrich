<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Returns the average value of an expression.
 */
class Avg extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('avg', [$this->parameter]);
    }
}
