<?php
    session_start();
    require_once '../../config/databaseConfig.php';
    require_once '../Models/SelfHelp.php';

    $database = new Database();
    $db = $database->getConnection();

    $self_help = new SelfHelp($db);

    #create new self_help region
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_self_help"])) {

        $self_help->name = $_POST['name'];
        $self_help->amount = $_POST['amount'];

        if ($self_help->create_self_help()) {
            $_SESSION['message'] = 'Created successfully';
        } else {
            $_SESSION['error'] = 'Failed to create new. Please try again.';
        }

        // Redirect to the self_help page
        header('Location: ../self_help.php');
        exit();
    }

    #Delete a self_help
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_self_help"])) {

        $self_help->self_help_id = intval($_POST["pain_id"]);

        if ($self_help->self_help_id > 0) {
            if ($self_help->delete_self_help($self_help->self_help_id)) {
                $_SESSION['message'] = 'pain deleted successfully';
            } else {
                $_SESSION['error'] = 'Failed to delete the pain. Please try again.';
            }
        } else {
            $_SESSION['error'] = 'invalid pain ID.';
        }

        // Redirect to the self_help page
        header('Location: ../self_help.php');
        exit();
    } else {
        $_SESSION['error'] = 'Invalid request.';
        header('Location: ../pains.php');
        exit();
    }