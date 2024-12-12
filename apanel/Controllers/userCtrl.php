<?php
    session_start(); //replace with config
    require_once '../../config/databaseConfig.php';
    require_once '../Models/User.php';

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    

    # Registering a new patient
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_patient'])) {

        $user->user_id = uniqid();
        $user->email = $_POST['email'];
        $user->fullname = $_POST['fullname'];
        $user->gender = $_POST['gender'];
        $user->phone = $_POST['phone'];
        $user->date_of_birth = $_POST['date_of_birth'];
        $user->address = $_POST['address'];

        if ($user->password = $_POST['password'] == $user->re_password = $_POST['re_password']) {
            
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            # Check if username already exists
            if ($user->checkUserExists()) {
                $_SESSION['error'] = "Email Has been registered";
                header('location: ../patients.php');
                return;
            }

            if($user->register()) {
                $_SESSION['message'] = 'Registration successful.';
                header('location: ../patients.php');
            } else {
                $_SESSION['error'] = 'Error registering patient';
                header('location: ../patients.php');
            }

        } else {
            $_SESSION['error'] = "Password mismatch";
            header('location: ../patients.php');
        }

    }
    
    # Registering a new doctor
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_doctor'])) {

        $user->user_id = uniqid();
        $user->email = $_POST['email'];
        $user->fullname = $_POST['fullname'];
        $user->gender = $_POST['gender'];
        $user->phone = $_POST['phone'];
        $user->qualification = $_POST['qualification'];
        $user->address = $_POST['address'];
        $user->specialization = $_POST['specialization'];
        $user->clinic_map = $_POST['clinic_map'];

        if ($user->password = $_POST['password'] == $user->re_password = $_POST['re_password']) {
            
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            # Check if username already exists
            if ($user->checkUserExists()) {
                $_SESSION['error'] = "Email Has been registered";
                header('location: ../doctors.php');
                return;
            }

            if($user->register_doctor()) {
                $_SESSION['message'] = 'Registration successful.';
                header('location: ../doctors.php');
            } else {
                $_SESSION['error'] = 'Error registering doctor';
                header('location: ../doctors.php');
            }

        } else {
            $_SESSION['error'] = "Password mismatch";
            header('location: ../doctors.php');
        }

    }

    #Login statement
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login()) {
            $_SESSION['user_id'] = $user->user_id;
            $_SESSION['email'] = $user->email;
            $_SESSION['message'] = 'You are logged in';
            header('location: ../index.php');
        } else {
            $_SESSION['error'] = 'invalid login credentials';
            header('location: ../login.php');
        }
    }

    #Reset password
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset_password'])) {
        
        $user->old_password = $_POST['old_password'];

        if ($user->new_password = $_POST['new_password'] === $$user->confirm_password = $_POST['confirm_password']) {
            
            if ($user->change_password($_SESSION['user_id'])) { // TODO : Creat session for user_id
                $_SESSION['message'] = 'Password reset successful';
                header('location: ./settings.php');
            } else {
                $_SESSION['error'] = 'Error, please try again';
                header('location: ../change-password.php');
            }
        } else {
            
            $_SESSION['error'] = 'New password does not match';
            header('location: ../change-password.php');
        }
    }

    #Delete patient account
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete_patient_id"])) {

        if ($user->delete_patient($_GET['delete_patient_id'])) {
            $_SESSION['message'] = 'user deleted successfully';
            header('location: ../patients.php');
        } else {            
            $_SESSION['error'] = 'unable to delete';
            header('location: ../patients.php');
        }
    }

    #Delete doctor account
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete_doctor_id"])) {

        if ($user->delete_doctor($_GET['delete_doctor_id'])) {
            $_SESSION['message'] = 'user deleted successfully';
            header('location: ../doctors.php');
        } else {            
            $_SESSION['error'] = 'unable to delete';
            header('location: ../doctors.php');
        }
    }

    #Activate doctor account
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["activate_user"])) {

        $user->status=$_POST["activate"];
        $user_id=$_POST["doctor_id"];

        if ($user->activate_doctor($_POST['doctor_id'])) {
            $_SESSION['message'] = 'Doctor account activated';
            header("location: ../view_doctor.php?doctor_id=$user_id");
        } else {            
            $_SESSION['error'] = 'unable to activate';
            header("location: ../view_doctor.php?doctor_id=$user_id");
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["suspend_user"])){

        $user->status=$_POST["suspend"];
        $user_id=$_POST["doctor_id"];
        
        if ($user->activate_doctor($_POST['doctor_id'])) {
            $_SESSION['message'] = 'Doctor account suspended';
            header("location: ../view_doctor.php?doctor_id=$user_id");
        } else {            
            $_SESSION['error'] = 'unable to suspend';
            header("location: ../view_doctor.php?doctor_id=$user_id");
        }
    }

    #Logout statement
    if(isset($_POST['logout'])) {
    
        session_destroy();
        session_start();
        $_SESSION['message'] = 'You logged out';
        header('Location: ../');
        exit;
    }
