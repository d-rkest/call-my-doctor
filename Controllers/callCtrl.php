<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Doctor.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new Doctor($db);

    $user_id = $_SESSION['user_id'];
    
    #Row count of available doctors
    if (isset($_POST['call_available_doctor'])) {
        
        header('Location: ../patients/call.php');
    }
    