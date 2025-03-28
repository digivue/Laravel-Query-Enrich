<?php

namespace digivue\LaravelQueryEnrich\String;

use Illuminate\Support\Facades\DB;
use digivue\LaravelQueryEnrich\DBFunction;
use digivue\LaravelQueryEnrich\QE;

/**
 * Determines if a given string contains a given substring.
 */
class Contains extends DBFunction
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
        $needle = QE::concat(QE::raw(DB::escape('%')), $this->needle, QE::raw(DB::escape('%')));

        return "$haystack like $needle";
    }
}
