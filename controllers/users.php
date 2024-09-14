<?php 
    require_once "models/User.php";
    class Users {
        
        # Controlador Principal Usuarios
        public function main(){
            echo "Controlador Principal: Users";
        }
        # Controlador Registrar Usuario
        public function create_user(){            
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/modules/users/user_create.view.php";    
            }            
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(
                    null,
                    $_POST['user_name'],
                    $_POST['user_address'],
                    $_POST['user_email'],
                    $_POST['user_phone'],
                    $_POST['user_category'],
                    $_POST['user_pass'],
                    $_POST['user_status']                    
                );                
                $user->user_create();
                header("Location: ?c=Users&a=read_users");            
            }        
        }
        
        # Controlador Consultar Usuarios
        public function read_users(){
            require_once "views/modules/users/user_read.view.php";    
        }
    }
?>