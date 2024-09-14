<?php 
    require_once "models/User.php";
    class Users {
        
        public function main(){
            echo "Controlador Principal: Users";
        }
        
        public function create_user(){            
            
            // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //     require_once "views/modules/users/user_create.view.php";    
            // }            
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $user = new User(
                    null,
                    "Pepito Pérez",
                    "Av. Siempre Viva",
                    "pepito@correo.com",
                    "3153153151",
                    "A",
                    "12345",
                    0
                );
                // print_r($user);
                $user->user_create();
            }            
            
        }        
    }
?>