<?php

require_once 'vendor/autoload.php';

use App\Core\Database;

$db = Database::getInstance();

$db->query("DROP TABLE IF EXISTS articles");

$db->query("
CREATE TABLE articles (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    body TEXT NOT NULL,
    image TEXT NOT NULL 
)");
