<?php

use Core\DBContext;

$dbContext = new DBContext();

$favPerson = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People WHERE ID = :id",
    ['id' => $_GET['ID']]);

$viewParams = [
    'title' => 'Favorite People',
    'banner' => 'Favorite People',
    'person' => $favPerson
];

view('Favorite-People/show.view.php', $viewParams);