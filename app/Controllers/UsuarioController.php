<?php



class UsuarioController{

    public static function create(){
        $database = new Database('localhost','wordpress1','root','');
        $conn = $database->getConnection();
        var_dump($conn);
        echo "Esta es la vista de crear";
    }

    public static function edit($usuario){
        echo "Vamos a editar al usuario {$usuario}";
    }
}