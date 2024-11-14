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
