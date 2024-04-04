<?php

spl_autoload_register(function ($class) {
    var_dump($class);
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once "src/$class.php";
});

use App\Controllers\PublicController as PC;


$router = new App\Router();
var_dump($router);
