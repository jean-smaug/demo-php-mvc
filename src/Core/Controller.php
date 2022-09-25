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

        ob_start();
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
