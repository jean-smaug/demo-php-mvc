<?php

require 'vendor/autoload.php';

$pathname = $_SERVER["PATH_INFO"] ?? "/";
$method = $_SERVER["REQUEST_METHOD"];

$routes = [
    "GET" => [],
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
