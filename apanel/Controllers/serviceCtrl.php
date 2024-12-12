<?php
    session_start();
    require_once '../../config/databaseConfig.php';
    require_once '../Models/Service.php';

    $database = new Database();
    $db = $database->getConnection();

    $service = new Service($db);

    #create new service
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_service"])) {

        $service->name = $_POST['name'];
        $service->amount = $_POST['amount'];

        if ($service->create_new_service()) {
            $_SESSION['message'] = 'service created successfully';
        } else {
            $_SESSION['error'] = 'Failed to create new service. Please try again.';
        }

        // Redirect to the services page
        header('Location: ../services.php');
        exit();
    }

    #Delete a service
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_service"])) {

        $service->service_id = intval($_POST["service_id"]);

        if ($service->service_id > 0) {
            if ($service->delete_service($service->service_id)) {
                $_SESSION['message'] = 'service deleted successfully';
            } else {
                $_SESSION['error'] = 'Failed to delete the service. Please try again.';
            }
        } else {
            $_SESSION['error'] = 'invalid service ID.';
        }

        // Redirect to the services page
        header('Location: ../services.php');
        exit();
    } else {
        $_SESSION['error'] = 'Invalid request.';
        header('Location: ../services.php');
        exit();
    }