<?php

//Call getenv() function without argument
require_once('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();
var_dump($_ENV);

?>
