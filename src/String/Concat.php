<?php

namespace digivue\LaravelQueryEnrich\String;

use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;

/**
 * Adds two or more expressions together.
 */
class Concat extends DBFunction
{
    private array $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        if ($this->getDatabaseEngine() == EDatabaseEngine::SQLite) {
            return $this->getOperatorSeparatedSql('||', $this->parameters);
        }

        return $this->getFunctionCallSql('concat', $this->parameters);
    }
}
