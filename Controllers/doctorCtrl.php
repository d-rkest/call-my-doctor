<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Doctor.php';

    $database = new Database();
    $db = $database->getConnection();

    $users = new Doctor($db);

    $user_id = $_SESSION['id'];
    
    #All appointments
    if ($users->fetch_appointment($user_id)) {

        return $users->fetch_appointment($user_id);
    }
    
    #All reports
    if ($users->fetch_report()) {

        return $users->fetch_report();
    }
    
    #All reports
    if ($users->fetch_profile()) {

        return $users->fetch_profile();
    }
    
    #Row count of appointments
    if ($users->count_appointment()) {

        $appointmentCount = $users->fetch_users();
    }
    
    #Row count of available doctors
    if ($users->count_pending_report()) {

        $pendingReportCount = $users->count_pending_report();
    }
    
    #Row count of approved applications
    if ($users->count_report()) {

        $reportCount = $users->count_report();
    }