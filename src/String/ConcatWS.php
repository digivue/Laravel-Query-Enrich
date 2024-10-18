<?php

namespace digivue\LaravelQueryEnrich\String;

use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\EDatabaseEngine;
use digivue\LaravelQueryEnrich\QE;

/**
 * Adds two or more expressions together with a separator.
 */
class ConcatWS extends DBFunction
{
    private mixed $separator;
    private array $parameters;

    public function __construct(mixed $separator, ...$parameters)
    {
        $this->separator = $separator;
        $this->parameters = $parameters;
    }

    protected function getQuery(): string
    {
        if ($this->getDatabaseEngine() == EDatabaseEngine::SQLite) {
            $parameters = [];
            foreach ($this->parameters as $parameter) {
                $parameters[] = $parameter;
                $parameters[] = $this->separator;
            }
            array_pop($parameters);

            return QE::concat(...$parameters)->getQuery();
        }

        return $this->getFunctionCallSql('concat_ws', [$this->separator, ...$this->parameters]);
    }
}
