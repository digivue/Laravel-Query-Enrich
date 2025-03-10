<?php

namespace digivue\LaravelQueryEnrich\String;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\QE;

/**
 * Determines if a given string end with a given substring.
 */
class EndsWith extends DBFunction
{
    protected const IS_BOOLEAN = true;
    private mixed $haystack;
    private mixed $needle;

    public function __construct(mixed $haystack, mixed $needle)
    {
        $this->haystack = $haystack;
        $this->needle = $needle;
    }

    protected function getQuery(): string
    {
        $haystack = $this->escape($this->haystack);
        $needle = QE::concat(QE::raw(DB::escape('%')), $this->needle);

        return "$haystack like $needle";
    }
}
