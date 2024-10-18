<?php

namespace digivue\LaravelQueryEnrich\String;

use digivue\LaravelQueryEnrich\DBFunction;

/**
 * Replaces occurrences of a substring with a new string.
 */
class Replace extends DBFunction
{
    private mixed $string;
    private mixed $substring;
    private mixed $newString;

    public function __construct(mixed $string, mixed $substring, mixed $newString)
    {
        $this->string = $string;
        $this->substring = $substring;
        $this->newString = $newString;
    }

    protected function getQuery(): string
    {
        return $this->getFunctionCallSql('replace', [$this->string, $this->substring, $this->newString]);
    }
}
