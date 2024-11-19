<?php

    // Llamando los Modelos (Clases: Modelo Negocio)
    require_once "models/User.php";

    class Users{        
        public function main(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/roles/admin/index.view.php";            
            require_once "views/roles/admin/footer.view.php";
        }
        
        // Controlador para Registrar el Rol
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
        // Controlador para consultar 'Todos' los Roles
        public function rolRead(){
            $roles = new User;
            $roles = $roles->readRoles();            
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/users/rol_read.view.php";          
            require_once "views/roles/admin/footer.view.php";
        }
        
        // Controlador para actualizar un Rol        
        public function rolUpdate(){            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rolId = new User;
                $rolId = $rolId->getRolById($_GET['idRol']);                
                require_once "views/roles/admin/header.view.php";                
                require_once "views/modules/users/rol_update.view.php";          
                require_once "views/roles/admin/footer.view.php";
                
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolUpdate = new User;
                $rolUpdate->setRolCode($_POST['rol_code']);
                $rolUpdate->setRolName($_POST['rol_name']);
                $rolUpdate->updateRol();
                header("Location: ?c=Users&a=rolRead");
            }
        }

        // Controlador para eliminar Rol
        public function rolDelete(){            
            $rol = new User;
            $rol->deleteRol($_GET['idRol']);
            header("Location: ?c=Users&a=rolRead");            
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