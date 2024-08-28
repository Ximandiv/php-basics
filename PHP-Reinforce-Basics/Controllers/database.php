<?php

require 'Classes/Config.php';
require 'Classes/DBContext.php';

$title = 'Epic DB Title';

$banner = 'Favorite People';

$config = new Config();

$dbContext = new DBContext($config);

$favPeople = $dbContext->execQueryArray("SELECT * FROM Favorite_People");

$favPerson = $dbContext->execQuerySingle("SELECT * FROM Favorite_People WHERE ID = 1");

require 'Views/database.view.php';