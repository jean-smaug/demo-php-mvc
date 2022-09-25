<?php

require 'vendor/autoload.php';

$pathname = $_SERVER["PATH_INFO"] ?? "/";
$method = $_SERVER["REQUEST_METHOD"];

$routes = [
    "GET" => [
        "/" => [\App\Controller\HomeController::class, "index"],
        "/about" => [\App\Controller\StaticController::class, "index"],
        "/articles" => [\App\Controller\ArticleController::class, "index"],
        "/article" => [\App\Controller\ArticleController::class, "show"],
        "/search-simple" => [\App\Controller\SearchController::class, "indexSimple"],
        "/search" => [\App\Controller\SearchController::class, "index"],
        "/api/search" => [\App\Controller\SearchController::class, "search"],
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
