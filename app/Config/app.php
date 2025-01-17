<?php

session_start();
$session_id = $_SESSION['user_type'];

if(empty($session_id)){
	header('Location: ../login.php');
	exit();
}

