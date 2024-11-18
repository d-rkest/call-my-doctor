<?php
    session_start(); //replace with config
    require_once '../config/databaseConfig.php';
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
                header('location: ./patients/register.php');
                return;
            }

            if($user->register()) {
                $_SESSION['message'] = 'Registration successful.';
                header('location: ./patients/login.php');
            } else {
                $_SESSION['error'] = 'Error registering patient';
                header('location: ./patients/register.php');
            }

        } else {
            $_SESSION['error'] = "Password mismatch";
            header('location: ./patients/register.php');
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
            $_SESSION['id'] = $user->id;
            $_SESSION['email'] = $user->email;
            $_SESSION['message'] = 'You are logged in';
            header('location: ../index.php');
        } else {
            $_SESSION['error'] = 'invalid login credentials';
            header('location: ../login.php');
        }
    }

    #Doctors Login statement
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_doctor'])) {
        
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login_doctor()) {
            $_SESSION['id'] = $user->id;
            $_SESSION['email'] = $user->email;
            $_SESSION['message'] = 'You are logged in';
            header('location: ../doctors/index.php');
        } else {
            $_SESSION['error'] = 'invalid login credentials';
            header('location: ../doctors/login.php');
        }
    }

    #Patient Login statement
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_patient'])) {
        
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login_patient()) {
            $_SESSION['id'] = $user->id;
            $_SESSION['email'] = $user->email;
            $_SESSION['message'] = 'You are logged in';
            header('location: ../patients/index.php');
        } else {
            $_SESSION['error'] = 'invalid login credentials';
            header('location: ../patients/login.php');
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

    #Logout statement
    if(isset($_POST['logout'])) {
    
        session_destroy();
        session_start();
        $_SESSION['message'] = 'You logged out';
        header('Location: ../');
        exit;
    }
