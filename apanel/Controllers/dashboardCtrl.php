<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once './Models/Dashboard.php';
    require_once './Models/Service.php';
    require_once './Models/Pain.php';

    $database = new Database();
    $db = $database->getConnection();

    $data = new Dashboard($db);
    $service = new Service($db);
    $pain = new Pain($db);

    $user_id = $_SESSION['user_id'];
    
    #All appointments
    if ($data->fetch_appointment()) {

        return $data->fetch_appointment();
    }
    
    #Row count of services
    if ($data->count_services()) {

        $serviceCount = $data->count_services();
    }
    
    #fetch services
    if ($service->fetch_services()) {

        return $service->fetch_services();
    }
    
    #fetch pains
    if ($pain->fetch_pains()) {

        return $pain->fetch_pains();
    }
    
    #Row count of doctors
    if ($data->count_doctors()) {
        $doctorCount = $data->count_doctors();
    }
    
    #Row count of patient
    if ($data->count_patient()) {

        $patientCount = $data->count_patient();
    }