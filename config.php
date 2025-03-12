<?php
    $DOMAIN = "https://istanbulcitytours.us";
    $PATH = "/istanbulcitytours";

    if ($_SERVER['HTTP_HOST'] === 'localhost') { 
        define('BASE_PATH', dirname(__DIR__) . $PATH);
    } else { 
        define('BASE_PATH', dirname(__DIR__) . "/public_html");
    }

    require_once BASE_PATH . "/php/minificate.php";
    ob_start('minify_html');

    include_once BASE_PATH . '/layouts/main.meta.php';
?>
