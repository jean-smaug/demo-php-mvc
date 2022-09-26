<?php

namespace App\Core;

class Request
{
    public $session;
    public $method;
    public $body;
    public $pathname;

    public function __construct()
    {
        $this->session = new Session();
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->pathname = $_SERVER["PATH_INFO"] ?? "/";
        $this->body = $_POST;
    }

    public function isGet(): bool
    {
        return $this->method === "GET";
    }

    public function isPost(): bool
    {
        return $this->method === "POST";
    }

    public function getMethod() {
        return $this->method;
    }

    public function getPathname() {
        return $this->pathname;
    }

    public function getInfos() {
        return [
            "method" => $this->method,
            "pathname" => $this->getPathname(),
        ];
    }
}
