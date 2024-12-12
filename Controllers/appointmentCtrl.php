<?php
    # session_start();
    require_once '../config/databaseConfig.php';
    require_once '../Models/Appointment.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new Appointment($db);

    # Registering a new patient
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_appointment'])) {

        $user->user_id = uniqid();
        $user->status = 0;
        $user->doctor_id = $_POST['doctor_id'];
        $user->patient_id = $_POST['patient_id'];
        $user->service = $_POST['service'];
        $user->zoom_link = $_POST['zoom_link'];
        $user->date = $_POST['date'];
        $user->time = $_POST['time'];

        if($user->book_appointment()) {
            $_SESSION['message'] = 'Appointment successful.';
            header('location: ../patients/call-a-doctor.php');
        } else {
            $_SESSION['error'] = 'Sorry! an error occured';
            header('location: ../patients/call-a-doctor.php');
        }

    }
