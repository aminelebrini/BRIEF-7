<?php

    $page = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    
    if ($page === '' || $page === '/') {
        $page = '/home';
    }
    
    $routes = ['/home','/service', '/about','/contact', '/pageaccount'];

    if(in_array($page, $routes)){
        $view = __DIR__ . "/../views$page.php";
        require_once $view;
    }

    $view = __DIR__ . "/../views$page.php";
    require_once $view;

    // echo "OK HTACCESS";
?>




