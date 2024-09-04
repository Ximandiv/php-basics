<?php

$title = "Unauthorized Page";

$banner = "You don't have access to this page";

$viewParams = [
    'title' => $title,
    'banner' => $banner,
];

View('Errors/401.view.php', $viewParams);
