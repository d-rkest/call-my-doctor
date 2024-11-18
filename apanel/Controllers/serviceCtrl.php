<?php
    require_once '../config/databaseConfig.php';
    require_once './Models/Service.php';

    $database = new Database();
    $db = $database->getConnection();

    $service = new Service($db);
    
    #All applications
    if ($service->fetch_services()) {

        return $service->fetch_services();
    }