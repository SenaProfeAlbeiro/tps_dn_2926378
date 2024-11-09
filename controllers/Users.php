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
            // Obj01
            echo "<br>Objeto 1<br>";
            $user = new User();
            $user->setRolCode("1");
            $user->setRolName("Administrador");            
            echo "Código :     " . $user->getRolCode();
            echo "<br>Nombre Rol : " . $user->getRolName();
            // Obj02
            echo "<br><br>Objeto 2<br>";
            $user02 = new User("correo@correo.com","12345");
            print_r($user02);
            // Obj03
            echo "<br><br>Objeto 3<br>";
            $user03 = new User(
                2,
                "Cliente",
                123,
                "Pepito",
                "Perez",
                "100010011002",
                "correo@correo.com",
                "12345",                
                0
            );
            print_r($user03);
            echo "<br><br>Código :     " . $user03->getRolCode();
            echo "<br>Nombre Rol : " . $user03->getRolName();

            
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