<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Article;

class ArticleController extends Controller
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new Article();
    }

    public function index() {
        $articles = $this->articleModel->fetchAll();

        $this->render("articles/index", [
            "articles" => $articles
        ]);
    }

    public function show() {
        $id = $_GET["id"];
        $article = $this->articleModel->fetchById($id);

        $this->render("articles/show", [
            "article" => $article
        ]);
    }
}
