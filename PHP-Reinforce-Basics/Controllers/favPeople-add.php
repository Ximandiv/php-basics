<?php

$title = 'Epic DB Title';

$banner = 'Favorite People';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cleanInput = [];

    foreach($_POST as $key => $value){
        $cleanInput[$key] = strip_tags($value);
    }
    
    dd($cleanInput);

    $dbContext = new DBContext();

    $dbContext->execStmt('INSERT INTO Favorite_People (FirstName, LastName, Age, JobTitle) VALUES (:first-name, :last-name, :age, :job-title)', $cleanInput);
}

require 'Views/favPeople-add.view.php';
