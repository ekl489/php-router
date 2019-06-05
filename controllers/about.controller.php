<?php
    $page = substr($request, 7, strlen($request) - 1);

    if($page == ''){
        require __DIR__ . '/../views/about.view.php';
    } else if($page == "me") {
        require __DIR__ . '/../views/about-me.view.php';
    } else {
        require __DIR__ . '/../views/404.view.php';
    }
?>