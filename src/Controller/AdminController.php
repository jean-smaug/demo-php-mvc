<?php

namespace App\Controller;

use App\Core\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->setTemplate("admin");
    }

    public function index() {
        $this->render("admin");
    }
}
