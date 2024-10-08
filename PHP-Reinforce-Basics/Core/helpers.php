<?php

require base_path('/Core/Response.php');

// Only for debugging purposes
function dd($value){

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// Applies normal nav style or current page's nav style.
function applyNavItemStyle($url): string
{
    if(!currPageIs($url)){
        return 'rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white text-gray-300';
    }

    else{
        return 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium';
    }
}

function currPageIs($url): bool
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $params = []): void
{
    extract($params);
    require base_path('/Views/' . $path);
}

function controller($path, $params = []): void
{
    extract($params);
    require base_path('/Controllers/' . $path);
}