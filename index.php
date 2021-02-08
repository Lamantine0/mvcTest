<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// Подключение файлов
defined('ROOT', dirname(__FILE__));
require_once(ROOT.'mvcTest/components/Router.php');





// вызов Router
$router = new Router();
$router->run();

