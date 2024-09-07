<?php 
    require_once "models/User.php";
    class Users {
        public function create_user(){
            $user = new User(
                null,
                'José',
                null,
                null,
                null,
                null,
                null
            );
            // print_r($user);
            $user->user_create();            
        }
    }
?>