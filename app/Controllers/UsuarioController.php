<?php



class UsuarioController{

    public static function create(){
    
        $data = json_decode(file_get_contents("php://input"),true);
        var_dump($data);

        UsuarioModel::insert();
        
        echo "Esta es la vista de crear";
    }

    public static function edit($usuario){
        echo "Vamos a editar al usuario {$usuario}";
    }
}