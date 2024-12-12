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

    #view doctor profile
    if(isset($_GET['doctor_id'])){
        return $user->view_doctor_profile($_GET['doctor_id']);
    }
