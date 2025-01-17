<?php
    namespace Controllers;

    class UserController {


        public function logout(): void {
            if(isset($_POST['logout'])) {
            
                session_destroy();
                session_start();
                $_SESSION['message'] = 'You logged out';
                header('Location: ../../login.php');
                exit;
            }            
        }

    }