<?php

    $page = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    
    $routes = ['/' ,'/home','/service', '/about','/contact'];

    if(in_array($page, $routes)){
        $view = __DIR__ . "/../views$page.php";
        require_once $view;
    }
