<?php

namespace digivue\LaravelQueryEnrich\Numeric;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Divide the first numeric parameter by subsequent numeric parameters.
 */
class Divide extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        return $this->getOperatorSeparatedSql('/', $this->parameters);
    }
}
