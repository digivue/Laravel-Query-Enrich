<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Adds multiple numeric parameters.
 */
class Add extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        return $this->getOperatorSeparatedSql('+', $this->parameters);
    }
}
