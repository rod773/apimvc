<?php



require __DIR__ . '/vendor/autoload.php';


$router = new \Bramus\Router\Router();

$router->get("/usuario",function(){

    echo "Hola soy la página de usuario";

});

$router->get("/usuario/{profile}",function($profile){

    echo "Hola soy la página de usuario del perfil {$profile}";

});


$router->run();