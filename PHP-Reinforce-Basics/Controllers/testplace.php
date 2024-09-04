<?php

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

$viewParams = [
    'title' => 'Testing Place',
    'banner' => 'Test',
    'amIAtWork' => true,
    'favoritePeopleList' => $favoritePeopleList,
    'favPeopleWDetailsList' => $favPeopleWDetailsList,
    'supGreet' => $supGreet,
    'helloGreet' => $helloGreet,
    'personName' => $personName,
    'world' => $world
];

view('testplace.view.php', $viewParams);