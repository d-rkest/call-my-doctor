<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Doctor.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new Doctor($db);

    $user_id = $_SESSION['user_id'];
    
    #All appointments
    if ($user->fetch_appointment($user_id)) {
        return $user->fetch_appointment($user_id);
    }
    
    #All medical reports
    if ($user->fetch_report($user_id)) {
        return $user->fetch_report($user_id);
    }
        
    #Row count of appointments
    if (isset($_SESSION['user_id'])) {
        $aCount = $user->count_appointment($_SESSION['user_id']);
    }
    
    #Row count of available doctors
    if (isset($_SESSION['user_id'])) {
        $prCount = $user->count_pending_report($_SESSION['user_id']);
    }
    
    #Row count of approved applications
    if (isset($_SESSION['user_id'])) {
        $rCount = $user->count_report($_SESSION['user_id']);
    }

    if (isset($_SESSION['user_id'])) {
        $profile = $user->user_profile($_SESSION['user_id']);

    }