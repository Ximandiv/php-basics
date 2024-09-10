<?php

use Core\DBContext;

$dbContext = new DBContext();

unset($_POST['_method']);

$dbContext->execStmt("DELETE FROM Favorite_People WHERE ID = :ID", $_POST);

header('Location: /people/list');