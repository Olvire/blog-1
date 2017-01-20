<?php
//включаем контроль ошибок

    session_start();
//подключаем файлы
    define('ROOT', dirname(__FILE__));
    require_once (ROOT.'/components/Autoload.php');

// вызвем роутер
    $router = new Router();
    $router->run();