<?php

namespace App\Core;

use App\Config;

class Database
{
    private static $database = null;

    public static function getInstance(): \PDO
    {
        if(is_null(Database::$database)) {
            Database::$database = new \PDO("sqlite:".Config::SQLITE_PATH, null, null, [
                \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC
            ]);
        }

        return Database::$database;
    }
}
