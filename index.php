<?php

// FRONT CONTROLLER
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__FILE__));
require_once('components/Autoload.php');
require_once 'models/DbConnect.php';
require_once 'models/User.php';
    $db = new DbConnect();

