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
            $user = new User;
            $user->setRolCode("1");
            $user->setRolName("Administrador");

            echo "Datos del Rol <br>";
            echo "<br>Código :     " . $user->getRolCode();
            echo "<br>Nombre Rol : " . $user->getRolName();
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