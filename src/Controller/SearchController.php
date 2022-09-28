<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;

class SearchController extends Controller
{
    public function indexSimple()
    {
        $this->render("search-simple");
    }

    public function index()
    {
        $this->render("search");
    }

    public function search()
    {
        $search = $_GET["q"];
        $db = Database::getInstance();
        $results = $db
            ->query("SELECT * FROM articles WHERE title LIKE '%$search%' OR body LIKE '%$search%'")
            ->fetchAll();

        $this->json($results);
    }
}
