<?php
require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;


$app = new Application();

$app->router->get('/', function(){
    return "hello world";
});

$app->router->get('/contact', function(){
    return "contact world";
});

$app->router->get('/details', function(){
    return "details world";
});


$app->run(); // Callback Function Call



