<?php
    namespace Controllers;
  

    #Logout statement
    if(isset($_POST['logout'])) {
    
        session_destroy();
        session_start();
        $_SESSION['message'] = 'You logged out';
        header('Location: ../../');
        exit;
    }