<?php

$title = "Page not found";

$banner = "404 Not Found";

$viewParams = [
    'title' => $title,
    'banner' => $banner,
];

View('Errors/404.view.php', $viewParams);
