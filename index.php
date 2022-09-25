<?php

require 'vendor/autoload.php';

$pathname = $_SERVER["PATH_INFO"] ?? "/";
$method = $_SERVER["REQUEST_METHOD"];

$routes = [
    "GET" => [
        "/" => [\App\Controller\HomeController::class, "index"],
        "/about" => [\App\Controller\StaticController::class, "index"]
    ],
    "POST" => []
];

$match = $routes[$method][$pathname] ?? null;

if ($match === null) {
    echo "Couldn't find a route that match $method $pathname";
    return;
}

[$controllerClass, $action] = $match;

$controller = new $controllerClass();
$controller->$action();
