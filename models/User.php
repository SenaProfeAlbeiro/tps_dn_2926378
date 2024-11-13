<?php

class User{
    /* -------- ATRIBUTOS ------- */
    private $dbh;
    private $rol_code;
    private $rol_name;
    private $user_code;
    private $user_name;
    private $user_lastname;
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_status;
    
    /* --------- MÉTODOS --------- */ 
    
    /* Sobrecarga de constructores */
    public function __construct(){
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    // Constructor de 2 parámetros (inicio sesión)
    public function __construct2($user_email,$user_pass){        
        $this->user_email = $user_email;
        $this->user_pass = $user_pass;        
    }

    // Constructor de 9 parámetros (Obj de toda la clase)
    public function __construct9($rol_code,$rol_name,$user_code,$user_name,$user_lastname,$user_id,$user_email,$user_pass,$user_status){
        $this->rol_code = $rol_code;
        $this->rol_name = $rol_name;
        $this->user_code = $user_code;
        $this->user_name = $user_name;
        $this->user_lastname = $user_lastname;
        $this->user_id = $user_id;
        $this->user_email = $user_email;
        $this->user_pass = $user_pass;
        $this->user_status = $user_status;
    }


    /* Métodos Setters y Getters */
    
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
    
    /* Métodos Persistencia a la Base de datos */

    # RF04_CU04 - Registrar Rol
    public function createRol(){
        try {
            $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('rolCode', $this->getRolCode());
            $stmt->bindValue('rolName', $this->getRolName());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>