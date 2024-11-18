<?php

    class Service {
        private $conn;
        private $table = 'services';

        public $id;
        public $service;
        public $amount;
        public $status;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all service(s)
        public function fetch_services() {
        
            $query = "SELECT * FROM services";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }