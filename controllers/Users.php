<?php

    // Llamando los Modelos (Clases: Modelo Negocio)
    require_once "models/User.php";

    class Users{        
        public function main(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/roles/admin/index.view.php";            
            require_once "views/roles/admin/footer.view.php";
        }
        
        // Controlador de Rol
        public function rolCreate(){            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/users/rol_create.view.php";          
                require_once "views/roles/admin/footer.view.php";                
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new User;
                $rol->setRolCode(null);
                $rol->setRolName($_POST['rol_name']);
                $rol->createRol();                
                header("Location: ?c=Users&a=rolRead");
            }
        }
        
        public function rolRead(){
            $roles = new User;
            $roles = $roles->readRoles();            
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/users/rol_read.view.php";          
            require_once "views/roles/admin/footer.view.php";
        }

        public function userCreate(){
            require_once "views/roles/admin/header.view.php";            
            require_once "views/modules/users/user_create.view.php";            
            require_once "views/roles/admin/footer.view.php";            
        }

        public function userRead(){
            require_once "views/roles/admin/header.view.php";            
            require_once "views/modules/users/user_read.view.php";            
            require_once "views/roles/admin/footer.view.php";            
        }
    }
?>