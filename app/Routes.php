<?php

use Firebase\JWT\JWT;

$router = new \Bramus\Router\Router();



$router->get("/usuario",function(){

    //if user name and password are correct, generate bearer token
    // to send autorization bearer token
    $usuario = "rod";
    $iss = $_SERVER['SERVER_NAME'];
    $sub = $usuario;
    $iat = time();
    $exp = time() + (60 * 60 * 24);

    $payload = [
        'iss' => $iss,
        'sub' => $sub,
        'iat' => $iat,
        'exp' => $exp,
    ];

    $key = '90481cd8c9b821da4a6f8a6aa72b4867b71986555819865f522111e71052e3ef';

    $jwt = JWT::encode($payload, $key, 'HS256');

    $jwt_token = $jwt;

    echo "token : ".$jwt_token;

    echo "<br>";


    $database = new Database('localhost','wordpress1','root','');
    $conn = $database->getConnection();

    $sql = "select * from wp_users";

    $stmt = $conn->query($sql);

    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        "message"=>"method get",
        "results" => $results
    ]);

});


$router->post("/usuario/create",[UsuarioController::class,'create']);

$router->get("/usuario/edit/{usuario}",[UsuarioController::class,'edit']);

$router->get("/usuario/{profile}",function($profile){

    echo "Hola soy la página de usuario del perfil {$profile}";

});



$router->run();