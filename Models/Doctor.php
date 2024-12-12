<?php

    class Doctor {
        private $conn;

        public $id;
        public $user_id;
        public $patients_id;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all appointment
        public function fetch_appointment($user_id) {
        
            $query = "SELECT a.*, p.*
            FROM appointments a
            INNER JOIN patient_info p ON a.patient_id = p.user_id
            WHERE a.doctor_id = '$this->user_id' ";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch user profile
        public function user_profile($user_id) {

            $this->user_id = $user_id;
        
            $query = "SELECT u.*, d.* FROM user u
            JOIN doctors_info d ON u.user_id = d.user_id
            WHERE u.user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        #Fetch medical reports
        public function fetch_report($user_id) {
        
            $query = "SELECT m.*, p.* FROM medical_reports m
            INNER JOIN patient_info p ON m.patient_id = p.user_id
            WHERE m.doctor_id = '$this->user_id' ";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch doctor's profile
        public function fetch_profile() {
        
            $query = "SELECT * FROM doctors_info";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #Count Appointments
        public function count_appointment($user_id) {
            $this->user_id = $user_id;

            $stmt = $this->conn->query("SELECT count(*) FROM appointments");
            return $stmt->fetchColumn();
        }

        #Count pending report
        public function count_pending_report($user_id) {
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports");
            return $stmt->fetchColumn();
        }

        #Count reports
        public function count_report($user_id) {
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports");
            return $stmt->fetchColumn();
        }

    }