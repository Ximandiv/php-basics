<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($token)) {
    var_dump($_SESSION);
    try {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf-token'] = $token;
    } catch (\Random\RandomException $e) {

    }
}

$viewParams = [
    'title' => 'Favorite People',
    'banner' => 'Favorite People Epic Form',
    'token' => $token,
    'errorMsgs' => $errorMsgs ?? []
];

view('Favorite-People/create.view.php', $viewParams);