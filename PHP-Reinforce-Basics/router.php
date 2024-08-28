<?php

$routes = [
    '/' => 'Controllers/index.php',
    '/testplace' => 'Controllers/testplace.php',
    '/about' => 'Controllers/about.php',
    '/people' => 'Controllers/database.php'
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code = 404){
    http_response_code($code);

    require("Controllers/$code.php");

    die();
}

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);