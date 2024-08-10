<?php



class UsuarioController{

    public static function create(){
    
        $data = json_decode(file_get_contents("php://input"),true);
        

        $usuarioModel = new UsuarioModel($data);

        $usuarioModel->insert();
        
        echo "Esta es la vista de crear";
    }

    public static function edit($usuario){
        echo "Vamos a editar al usuario {$usuario}";
    }
}