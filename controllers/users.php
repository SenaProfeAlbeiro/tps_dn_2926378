<?php 
    require_once "models/User.php";
    class Users {
        
        public function main(){
            echo "Controlador Principal: Users";
        }
        
        public function create_user(){            
            
            // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
            // }            
            $user_name = "Albeiro";
            $user_pass = sha1("12345");
            echo "<br>Nombre: " . $user_name;
            echo "<br>Password: " . $user_pass;
            
        }        
    }
?>