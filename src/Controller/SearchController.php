<?php

namespace App\Controller;

use App\Core\Controller;

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
        $this->json(["foo" => 123321]);
    }
}
