<?php

$title = 'Epic DB Title';

$banner = 'Favorite People';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    dd($_POST);
}

require 'Views/favPeople-add.view.php';