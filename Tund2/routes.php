<?php
use App\Router;

Router::addRoute('/', function() {
    include 'views/index.php';
}); 

Router::addRoute('/page1.php', function() {
    include 'views/page1.php';
}); 
Router::addRoute('/page2.php', function() {
    include 'views/page2.php';
}); 