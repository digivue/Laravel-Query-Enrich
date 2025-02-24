<?php

namespace digivue\LaravelQueryEnrich\Operator;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Negates a condition with logical NOT.
 */
class Not extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        $parameter = $this->escape($this->parameter);

        return "not $parameter";
    }
}
