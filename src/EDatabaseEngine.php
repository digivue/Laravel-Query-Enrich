<?php

namespace digivue\LaravelQueryEnrich;

enum EDatabaseEngine
{
    case MySQL;
    case PostgreSQL;
    case SQLite;
    case SQLServer;
}
