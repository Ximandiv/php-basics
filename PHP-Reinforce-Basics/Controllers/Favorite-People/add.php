<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

use Core\DBContext;
require base_path('/Validator.php');

$cleanReq = [];
$errorMsgs = [];

foreach($_POST as $key => $value){
    $cleanReq[$key] = trim(strip_tags($value));
}

$errorMsgs = validateReq($cleanReq, $errorMsgs);

if(!empty($errorMsgs)) {
    $params = [
        'token' => $cleanReq['csrf-token'],
        'errorMsgs' => $errorMsgs
    ];

    controller('Favorite-People/create.php', $params);

    return;
}

unset($cleanReq['csrf-token']);
$dbContext = new DBContext();

$dbContext->execStmt('INSERT INTO Favorite_People (FirstName, LastName, Age, JobTitle, About) 
                                    VALUES (:fName, :lName, :age, :jTitle, :about)', $cleanReq);

header('Location: /people/list');

function validateReq($req, $errorMsgs) : array
{
    if($req['csrf-token'] !== $_SESSION['csrf-token']) {
        $errorMsgs['csrf-token'] = 'Invalid CSRF token';
    }

    if(!Validator::isTextLenValid($req['fName'], 2, 25)){
        $errorMsgs['fName'] = 'First name must be 2 or more characters and less than 25';
    }

    if(!Validator::isTextLenValid($req['lName'], 2, 25)){
        $errorMsgs['lName'] = 'Last name must be 2 or more characters and less than 25';
    }

    if(!Validator::isAgeValid($req['age'])){
        $errorMsgs['age'] = 'Age must be 18 years old or higher and less than 120';
    }

    if (!Validator::isTxtEmpty($req['jTitle'])
        && !Validator::isTextLenValid($req['jTitle'], 2, 25)){
        $errorMsgs['jTitle'] = 'Job title must be 2 or more characters and less than 25';
    }

    if(Validator::isTxtEmpty($req['about'])){
        $errorMsgs['about'] = 'About must be filled';
    }

    return $errorMsgs;
}