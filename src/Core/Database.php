<?php

namespace App\Core;

use App\Config;

class Database
{
    private static $database;

    public function __construct()
    {
        if(Database::$database === null) {
            Database::$database = new PDO("sqlite:".Config::SQLITE_PATH);
        }
    }

    public function getDatabase()
    {
        return Database::$database;
    }
}
