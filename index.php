<?php

require 'vendor/autoload.php';

$request = new \App\Core\Request();

$routes = [
    "GET" => [
        "/" => [\App\Controller\HomeController::class, "index"],
        "/about" => [\App\Controller\StaticController::class, "index"],
        "/articles" => [\App\Controller\ArticleController::class, "index"],
        "/article" => [\App\Controller\ArticleController::class, "show"],
        "/search-simple" => [\App\Controller\SearchController::class, "indexSimple"],
        "/search" => [\App\Controller\SearchController::class, "index"],
        "/api/search" => [\App\Controller\SearchController::class, "search"],
        "/login" => [\App\Controller\AuthController::class, "index"],
        "/logout" => [\App\Controller\AuthController::class, "logout"],
        "/admin" => [\App\Controller\AdminController::class, "index"],
    ],
    "POST" => [
        "/login" => [\App\Controller\AuthController::class, "login"],
    ]
];

$method = $request->getMethod();
$pathname = $request->getPathname();
$match = $routes[$method][$pathname] ?? null;

if ($match === null) {
    echo "Couldn't find a route that match $method $pathname";
    return;
}

[$controllerClass, $action] = $match;

$controller = new $controllerClass();
$controller->setRequest($request);
$controller->$action($request);
