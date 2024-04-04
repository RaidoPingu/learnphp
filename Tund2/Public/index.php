<?php

spl_autoload_register(function ($class) {
    //var_dump($class);
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once "src/$class.php";
});

use App\Router;

require 'routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router ->match();
if ($match) {
    call_user_func($match['action']);
} else {
    echo 404;
} 

//$router = new App\Router();
//var_dump($router);
