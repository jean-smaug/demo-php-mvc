<?php

namespace App\Core;

abstract class Controller
{
    private $template = "base";

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function render($view, $variables = [])
    {
        extract($variables);

        // Variables accessible from view
        // Not the better place
        $pathname = $_SERVER["PATH_INFO"] ?? "/";
        $environement = getenv("APP_ENV") ?? "development";
        $assetsBaseUrl = $environement === "production" ? "/dist" : "http://localhost:1234";

        ob_start();
        $viewFilePath = __DIR__ . "/../../views/$view.php";

        if(file_exists($viewFilePath) === false) {
            throw new \Error("Couldn't find $viewFilePath");
        }

        require_once __DIR__ . "/../../views/$view.php";
        $content = ob_get_clean();

        require_once __DIR__ . "/../../views/templates/$this->template.php";
    }

    public function json($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    public function redirect($path)
    {
        header("Location: $path");
    }
}
