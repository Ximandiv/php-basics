<?php

$title = 'Testing Place';

$banner = 'Index';

$amIAtWork = true;

if($amIAtWork){
    echo "If you see this, I'm at work!";
}
else{
    echo "If you see this, I'm not at work!";
}

function greetPerson($greet, $person)
{
    return "{$greet()} {$person()}!";
}

$supGreet = function(){
    return "Sup'";
};

$helloGreet = function(){
    return "Hello";
};

$personName = function(){
    return 'Taka';
};

$world = function(){
    return 'World';
};

$favoritePeopleList = ['Taka', 'Mr. Poof', 'Chambas', 'Julian'];

$favPeopleWDetailsList =
    [
      [
          "name" => "Taka",
          "age" => 20,
          "gender" => "Male",
          "job" => "Web Developer"
      ],
        [
            "name" => "Mr. Poof",
            "age" => 24,
            "gender" => "Male",
            "job" => "Backend Developer"
        ],
        [
            "name" => "Chambas",
            "age" => 35,
            "gender" => "Male",
            "job" => "Fullstack Senior Web Developer"
        ],
        [
            "name" => "Julian",
            "age" => 38,
            "gender" => "Male",
            "job" => "Human Resources Director"
        ]
    ];

require 'Views/testplace.view.php';