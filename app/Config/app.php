<?php
    // Base URL of the application
	define('BASE_URL', 'http://localhost/telemedicine-app');
	define("APP_NAME", "Call My Doctor");

	// Database configurations
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'telemedicine');
	define('DB_USER', 'root');
	define('DB_PASS', 'password');

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
