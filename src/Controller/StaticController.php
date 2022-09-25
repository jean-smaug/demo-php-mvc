<?php

namespace App\Controller;

use App\Core\Controller;

class StaticController extends Controller
{
    public function index() {
        $this->render("about");
    }
}
