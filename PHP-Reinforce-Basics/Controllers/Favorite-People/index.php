<?php

use Core\DBContext;

$dbContext = new DBContext();

$allFavPeople = $dbContext->getTableIds('Favorite_People');

#Selects all IDs from the multi-array then selects a random index to display the value as a "Random Selected Person"
$allFavPeopleIds = array_column($allFavPeople, 'ID');
$randomPersonId = $allFavPeopleIds[array_rand($allFavPeopleIds)];

$favPeople = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People",
                                            [],
                                            true);

$favPerson = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People WHERE ID = :id",
                                            ['id' => $randomPersonId]);

$viewParams = [
    'title' => 'Favorite People',
    'banner' => 'Favorite People',
    'favPeople' => $favPeople,
    'favPerson' => $favPerson
];

view('Favorite-People/index.view.php', $viewParams);