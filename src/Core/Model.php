<?php

namespace App\Core;

abstract class Model
{
    private \PDO $database;
    private $table;

    public function __construct($table)
    {
        $this->database = Database::getInstance();
        $this->table = $table;
    }

    public function fetchAll()
    {
        return $this->database
            ->query("SELECT * FROM $this->table")
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchById($id)
    {
        return $this->fetchBy("id", $id);
    }

    public function fetchBy($key, $value)
    {
        return $this->database
            ->query("SELECT * FROM $this->table WHERE $key = $value")
            ->fetch(\PDO::FETCH_ASSOC);
    }

    public function getDatabase()
    {
        return $this->database;
    }
}
