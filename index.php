<?php

// FRONT CONTROLLER
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Подключение файлов системы
//define('ROOT', dirname(__FILE__));
//require_once('components/Autoload.php');
require_once 'models/DbConnect.php';
require_once 'models/User.php';
    $db = new DbConnect();

// Вызов Router
//$router = new Router();
//$router->run();