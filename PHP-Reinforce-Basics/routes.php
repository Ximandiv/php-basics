<?php

// GET
$router->get('/', '/Controllers/index.php');
$router->get('/testplace', '/Controllers/testplace.php');
$router->get('/about', '/Controllers/about.php');
$router->get('/people/list', '/Controllers/Favorite-People/index.php');
$router->get('/people', '/Controllers/Favorite-People/show.php');
$router->get('/people/create', '/Controllers/Favorite-People/create.php');

// POST
$router->post('/people/create', '/Controllers/Favorite-People/add.php');

// DELETE
$router->delete('/people/list', '/Controllers/Favorite-People/destroy.php');
$router->delete('/people', '/Controllers/Favorite-People/destroy.php');