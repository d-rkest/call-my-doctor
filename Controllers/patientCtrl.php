<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Patient.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $user = new Patient($db);
    
    #Upload Medical Report
    if (isset($_POST["upload_report"])) {
    
        session_start();
        // Get the file details
        $user->report_type = $_POST['report_type'];
        $user->file_size = $_FILES['medical_report']['size'];
        $user->file_name = $_FILES['medical_report']['name'];
        $user->file_tmp = $_FILES['medical_report']['tmp_name'];
        $user->file_error = $_FILES['medical_report']['error'];
    
        // Set the maximum file size
        $max_file_size = 1024 * 1024 * 5; // 5MB

        
        // Check if the file size is within the limit
        if ($file_size <= $max_file_size) {

            $response = $user->upload_report($_POST['user_id']);
        
            if ($response['status'] == true) {
        
                $_SESSION['message'] = $response["message"];
                header("location: ../patients/medical-report.php");
        
            } else {
        
                $_SESSION['message'] = $response["message"];
                header("location: ../patients/medical-report.php");
        
            } 
        } else {
        
            $_SESSION['message'] = "File size exceeds the maximum allowed size.";
            header("location: ../patients/medical-report.php");
        }
    
    }

    #All appointments
    if ($user->fetch_appointment($user_id)) {
        return $user->fetch_appointment($user_id);
    }
    
    #All appointments
    if ($user->fetch_feedback($user_id)) {
        return $user->fetch_feedback($user_id);
    }
    
    #All available doctors
    if ($user->available_doctors()) {
        return $user->available_doctors();
    }
    
    #Row count of appointments
    if ($user->count_appointment($_SESSION['user_id'])) {
        $appointmentCount = $user->count_appointment($_SESSION['user_id']);
    }
    
    #Row count of available doctors
    if ($user->count_available_doctor()) {
        $doctorCount = $user->count_available_doctor();
    }
    
    #Row count of approved applications
    if ($user->count_report($_SESSION['user_id'])) {
        $reportCount = $user->count_report($_SESSION['user_id']);
    }

    #get logged in user details
    if (isset($_SESSION['user_id'])) {
        $profile = $user->user_profile($_SESSION['user_id']);
    }

    #get services
    if ($user->get_services()) {
        $services = $user->get_services();
    }

    #get specialization
    if ($user->get_specialization()) {
        $specialty = $user->get_specialization();
    }

    #get pains
    if ($user->get_pain()) {
        $pains = $user->get_pain();
    }

    #Upload Medical Report
    if(isset($_GET['uid'])) {
        return $user->get_appointment_doc($_GET['uid']);
    }
    
