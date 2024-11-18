<?php

    class Patient {
        private $conn;

        public $id;
        public $user_id;
        public $doctors_id;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all appointment
        public function fetch_appointment() {
        
            $query = "SELECT a.*, d.*
            FROM appointments a
            LEFT JOIN doctors_info d ON a.doctor_id = d.user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch doctors
        public function doctors() {
        
            $query = "SELECT * FROM doctors_info";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch available doctors
        public function available_doctors() {
        
            $query = "SELECT * FROM doctors_info WHERE available = 1 ";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #Count Appointments
        public function count_appointment() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM appointments");
            return $stmt->fetchColumn();
        }

        #Count Patient
        public function count_available_doctor() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM doctors_info WHERE available = 1 ");
            return $stmt->fetchColumn();
        }

        #Count Patient
        public function count_report() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports");
            return $stmt->fetchColumn();
        }

        public function checkUserExists() {
            $query = "SELECT id FROM user WHERE email = :email";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result > 0;
        }
    }