<?php 

    require_once "models/User.php";

    class Users {

        public function create_user(){

            $user = new User;

            $user->setUserName('Albeirito');
            echo $user->getUserName();

        }

    }

?>