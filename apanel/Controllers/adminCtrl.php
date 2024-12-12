<?php
    require_once '../config/databaseConfig.php';
    require_once './Models/User.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    
    #Get settings
    if ($user->fetch_settings()) {

        return $user->fetch_settings();
    }

    #Get admin details
    if (isset($_SESSION['user_id'])) {
        $profile = $user->admin_profile($_SESSION['user_id']);
    }
