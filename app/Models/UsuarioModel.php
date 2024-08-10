<?php


class UsuarioModel{
    
    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    public  function insert(){

        var_dump($this->data);

        $database = new Database('localhost','wordpress1','root','');
        $conn = $database->getConnection();
        

    }
}