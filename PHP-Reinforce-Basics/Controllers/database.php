<?php

require 'Classes/Config.php';
require 'Classes/DBContext.php';

$title = 'Epic DB Title';

$banner = 'Favorite People';

$config = new Config();

$dbContext = new DBContext($config);

$favPeople = $dbContext->getAllFavPeople();

$favPerson = $dbContext->getFavPersonById(1);

require 'Views/database.view.php';