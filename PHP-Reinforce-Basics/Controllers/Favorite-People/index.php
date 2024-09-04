<?php

$title = 'Epic DB Title';

$banner = 'Favorite People';

$dbContext = new DBContext();

$favPeople = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People",
                                            [],
                                            true);

$favPerson = $dbContext->fetchSingleOrMany("SELECT * FROM Favorite_People WHERE ID = :id",
                                            ['id' => 1]);

require 'Views/Favorite-People/index.php';