<?php

namespace digivue\LaravelQueryEnrich\Operator;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Combines multiple conditions with logical OR .
 */
class _Or extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        return $this->getOperatorSeparatedSql('or', $this->parameters);
    }
}
