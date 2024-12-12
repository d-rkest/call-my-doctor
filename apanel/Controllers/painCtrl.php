<?php
    session_start();
    require_once '../../config/databaseConfig.php';
    require_once '../Models/Pain.php';

    $database = new Database();
    $db = $database->getConnection();

    $pain = new Pain($db);

    #create new pain region
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_pain"])) {

        $pain->name = $_POST['name'];
        $pain->amount = $_POST['amount'];

        if ($pain->create_new_pain()) {
            $_SESSION['message'] = 'Created successfully';
        } else {
            $_SESSION['error'] = 'Failed to create new. Please try again.';
        }

        // Redirect to the pain page
        header('Location: ../pains.php');
        exit();
    }

    #Delete a pain
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_pain"])) {

        $pain->pain_id = intval($_POST["pain_id"]);

        if ($pain->pain_id > 0) {
            if ($pain->delete_pain($pain->pain_id)) {
                $_SESSION['message'] = 'pain deleted successfully';
            } else {
                $_SESSION['error'] = 'Failed to delete the pain. Please try again.';
            }
        } else {
            $_SESSION['error'] = 'invalid pain ID.';
        }

        // Redirect to the pain page
        header('Location: ../pains.php');
        exit();
    } else {
        $_SESSION['error'] = 'Invalid request.';
        header('Location: ../pains.php');
        exit();
    }