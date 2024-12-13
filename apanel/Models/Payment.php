<?php

    class Payment {
        private $conn;
        private $table = 'payments';

        public $id;
        public $service;
        public $amount;
        public $status;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all service(s)
        public function fetch_payments() {
        
            $query = "SELECT p.*, u.* FROM payments p
            INNER JOIN patient_info u ON p.user_id = u.user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }