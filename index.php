<?php



require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Controllers/UsuarioController.php';

require __DIR__ . '/app/Database.php';


$router = new \Bramus\Router\Router();



$router->get("/usuario",function(){

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