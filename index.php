<?php
    $request = $_SERVER['REQUEST_URI']; // $_SERVER['REDIRECT_URL']; <-- didn't work

    if($request == '/' || $request == ''){
        require __DIR__ . '/views/home.view.php';
    } else if(substr($request, 0, 6) == '/about'){
        require __DIR__ . '/controllers/about.controller.php';
    } else {
        require __DIR__ . '/views/404.view.php';
    }
?>