<?php



class UsuarioController{

    public static function create(){
    
        $data = json_decode(file_get_contents("php://input"),true);
        var_dump($data);
        $database = new Database('localhost','wordpress1','root','');
        $conn = $database->getConnection();
        
        echo "Esta es la vista de crear";
    }

    public static function edit($usuario){
        echo "Vamos a editar al usuario {$usuario}";
    }
}