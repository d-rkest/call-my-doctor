<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Patient.php';

    $database = new Database();
    $db = $database->getConnection();

    $users = new Patient($db);
    
    #All appointments
    if ($users->fetch_appointment()) {

        return $users->fetch_appointment();
    }
    
    #All available doctors
    if ($users->available_doctors()) {

        return $users->available_doctors();
    }
    
    #Row count of appointments
    if ($users->count_appointment()) {

        $appointmentCount = $users->fetch_users();
    }
    
    #Row count of available doctors
    if ($users->count_available_doctor()) {

        $doctorCount = $users->count_available_doctor();
    }
    
    #Row count of approved applications
    if ($users->count_report()) {

        $reportCount = $users->count_report();
    }