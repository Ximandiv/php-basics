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

    // Add SQL Command down here
}

require 'Views/favPeople-add.view.php';
