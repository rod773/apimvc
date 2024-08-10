<?php


class UsuarioModel{
    
    private $data;

    public function __construct(){
        $this->data = json_decode(file_get_contents("php://input"),true);
    }

    public  function insert(){

        var_dump($this->data);

        $database = new Database('localhost','wordpress1','root','');
        $conn = $database->getConnection();
        

    }
}