<?php
    require_once '../config/databaseConfig.php';
    require_once './Models/Payment.php';

    $database = new Database();
    $db = $database->getConnection();

    $payment = new Payment($db);
    
    #All applications
    if ($payment->fetch_payments()) {

        return $payment->fetch_payments();
    }