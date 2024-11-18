<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once './Models/Dashboard.php';

    $database = new Database();
    $db = $database->getConnection();

    $users = new Dashboard($db);

    $user_id = $_SESSION['id'];
    
    #All appointments
    if ($users->fetch_appointment()) {

        return $users->fetch_appointment();
    }
    
    #Row count of services
    if ($users->count_services()) {

        $serviceCount = $users->count_services();
    }
    
    #Row count of doctors
    if ($users->count_doctors()) {

        $doctorCount = $users->count_doctors();
    }
    
    #Row count of patient
    if ($users->count_patient()) {

        $patientCount = $users->count_patient();
    }