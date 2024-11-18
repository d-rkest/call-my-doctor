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
            LEFT JOIN patient_info p ON a.patient_id = p.user_id
            WHERE a.doctor_id = '$this->user_id' ";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch medical reports
        public function fetch_report() {
        
            $query = "SELECT * FROM medical_reports";
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
        public function count_appointment() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM appointments");
            return $stmt->fetchColumn();
        }

        #Count pending report
        public function count_pending_report() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports WHERE status = 0 ");
            return $stmt->fetchColumn();
        }

        #Count reports
        public function count_report() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports");
            return $stmt->fetchColumn();
        }

    }