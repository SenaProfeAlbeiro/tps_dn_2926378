<?php 
    require_once "models/User.php";
    class Users {
        public function create_user(){
            
            // Crear un objeto con los métodos set
            $user1 = new User;
            $user1->setUserId(1);
            $user1->setUserName("María");            
            echo "Código: " . $user1->getUserId() . "<br>";            
            echo "Nombre: " . $user1->getUserName() . "<br>";
            echo "<br>";
            
            // Crear un objeto con el constructor
            $user2 = new User(
                2,
                'José',
                null,
                null,
                null,
                null,
                null
            );
            echo "Código: " . $user2->getUserId() . "<br>";            
            echo "Nombre: " . $user2->getUserName() . "<br>";            
        }
    }
?>