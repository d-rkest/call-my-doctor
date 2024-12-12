<?php
    session_start();

	$user_id = $_SESSION['user_id'];

	if(empty($user_id)){
		header('Location: ./login.php');
		exit();
	}

	define("APPNAME", "CALL MY DOCTOR");
