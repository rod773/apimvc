<?php



require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Controllers/UsuarioController.php';


$router = new \Bramus\Router\Router();

$router->get("/usuario",function(){

    echo "Hola soy la página de usuario";

});


$router->get("/usuario/create",[UsuarioController::class,'create']);

$router->get("/usuario/edit/{usuario}",[UsuarioController::class,'edit']);

$router->get("/usuario/{profile}",function($profile){

    echo "Hola soy la página de usuario del perfil {$profile}";

});











$router->run();