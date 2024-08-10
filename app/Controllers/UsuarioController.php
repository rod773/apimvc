<?php



class UsuarioController{

    public static function create(){
    
       
        

        $usuarioModel = new UsuarioModel();

        $usuarioModel->insert();
        
        echo "Esta es la vista de crear";
    }

    public static function edit($usuario){
        echo "Vamos a editar al usuario {$usuario}";
    }
}