<?php


// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

$router->get("/",function(){

    echo json_encode([
        "message"=>"Hola Mundo"
    ]);

});

// Run it!
$router->run();