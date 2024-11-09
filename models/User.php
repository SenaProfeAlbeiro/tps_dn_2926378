<?php

class User{

    // Atributos
    private $rol_code;
    private $rol_name;
    private $user_code;
    private $user_name;
    private $user_lastname;
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_status;

    // MÉTODOS
    // Métodos Setters y Getters

    // Código del rol
    public function setRolCode($rol_code){
        $this->rol_code = $rol_code;
    }
    public function getRolCode(){
        return $this->rol_code;
    }
    // Nombre del rol
    public function setRolName($rol_name){
        $this->rol_name = $rol_name;
    }
    public function getRolName(){
        return $this->rol_name;
    }



}

?>