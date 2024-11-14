<?php
    require_once '../config/databaseConfig.php';
    require_once './Models/Doctor.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new Doctor($db);
    
    #All applications
    if ($user->fetch_doctors()) {

        return $user->fetch_doctors();
    }