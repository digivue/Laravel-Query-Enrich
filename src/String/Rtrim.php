<?php

namespace digivue\LaravelQueryEnrich\String;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Removes trailing spaces from a string.
 */
class Rtrim extends DBFunction
{
    private mixed $parameter;

    public function __construct(mixed $parameter)
    {
        $this->parameter = $parameter;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('ltrim', [$this->parameter]);
    }
}
