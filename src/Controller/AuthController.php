<?php

namespace App\Controller;

use App\Core\Controller;

class AuthController extends Controller
{
    const USERNAME = "admin";
    const PASSWORD_HASH = "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8";

    public function index() {
        $this->render("login");
    }

    public function login() {
        if($_POST["username"] === self::USERNAME && hash("sha256", $_POST["password"]) === self::PASSWORD_HASH) {
            $this->redirect("/admin");
        } else {
            $this->request->session->addFlashMessage("error", "Identifiants invalides");

            $this->render("login");
        }
    }

    public function logout() {
        $this->redirect("/");
    }
}
