<?php

require BASE_PATH . 'Classes/Validator.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cleanReq = [];

    foreach($_POST as $key => $value){
        $cleanReq[$key] = trim(strip_tags($value));
    }

    $errorMsgs = validateReq($cleanReq);

    if(empty($errorMsgs)) {
        $dbContext = new DBContext();

        $dbContext->execStmt('INSERT INTO Favorite_People (FirstName, LastName, Age, JobTitle) VALUES (:fName, :lName, :age, :jTitle)', $cleanReq);
    }
}

function validateReq($req) : array
{
    $errorMsgs = [];

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

    return $errorMsgs;
}

$viewParams = [
    'title' => 'Favorite People',
    'banner' => 'Favorite People Epic Form',
    'errorMsgs' => $errorMsgs ?? []
];

view('Favorite-People/create.view.php', $viewParams);
