<?php
    // Base URL of the application
	// define('BASE_URL', 'http://localhost/telemedicine-app');
	// define("APP_NAME", "Call My Doctor");

	# Set session
	session_start();
	$session_id = $_SESSION['user_type'];

	if(empty($session_id)){
		header('Location: ../login.php');
		exit();
	}

	// Require the database configuration
	require_once __DIR__ . '/database.php';

	// Autoload classes using Composer's autoloader
	require_once __DIR__ . '/../../vendor/autoload.php';
