<?php

$dbContext = new DBContext();

$favPeopleCount = $dbContext->getTableCount('Favorite_People');

$favPeople = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People",
                                            [],
                                            true);

$favPerson = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People WHERE ID = :id",
                                            ['id' => mt_rand(1, $favPeopleCount)]);

$viewParams = [
    'title' => 'Favorite People',
    'banner' => 'Favorite People',
    'favPeople' => $favPeople,
    'favPerson' => $favPerson
];

view('Favorite-People/index.view.php', $viewParams);