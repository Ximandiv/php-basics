<?php

namespace Core;

use JetBrains\PhpStorm\NoReturn;

class Router {
    protected $routes = [];

    public function add($method, $uri, $controller){
        $this->routes[] = compact('method', 'uri', 'controller');
    }

    public function get($uri, $controller){
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller){
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller){
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller){
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller){
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] == $uri && $route['method'] == strtoupper($method)){
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    #[NoReturn] private function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("Controllers/Errors/{$code}.php");

        die();
    }
}

//
//use Core\Response;
//use JetBrains\PhpStorm\NoReturn;
//
//$routes = require base_path('/routes.php');
//
//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//
//#[NoReturn] function abort($code = Response::NOT_FOUND): void
//{
//    http_response_code($code);
//
//    require base_path("/Controllers/Errors/$code.php");
//
//    die();
//}
//
//function routeToController($uri, $routes): void
//{
//    if (array_key_exists($uri, $routes)) {
//        require base_path($routes[$uri]);
//    } else {
//        abort();
//    }
//}
//
//routeToController($uri, $routes);