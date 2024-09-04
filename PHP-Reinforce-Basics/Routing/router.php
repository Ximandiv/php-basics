<?php

use JetBrains\PhpStorm\NoReturn;

$routes = require 'Routing/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

#[NoReturn] function abort($code = Response::NOT_FOUND): void
{
    http_response_code($code);

    require("Controllers/Errors/$code.php");

    die();
}

function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);