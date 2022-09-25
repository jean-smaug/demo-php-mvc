<?php

require_once 'vendor/autoload.php';

$db = (new \App\Core\Database())->getDatabase();

$db->query("DROP TABLE IF EXISTS articles");

$db->query("
CREATE TABLE articles (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    body TEXT NOT NULL,
    image TEXT NOT NULL 
)");
