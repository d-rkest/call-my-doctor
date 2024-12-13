<?php
    require_once '../config/databaseConfig.php';
    require_once './Models/Patient.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new Patient($db);
    
    #All applications
    if ($user->fetch_patient()) {

        return $user->fetch_patient();
    }

    #view patient profile
    if(isset($_GET['user_id'])){
        return $user->view_patient_profile($_GET['user_id']);
    }
