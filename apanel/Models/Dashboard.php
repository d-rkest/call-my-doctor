<?php

    class Dashboard {
        private $conn;

        public $id;
        public $user_id;
        public $patients_id;
        
        public function __construct($db) {
            $this->conn = $db;
        }

        #Count Appointments
        public function count_services() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM services");
            return $stmt->fetchColumn();
        }

        #Count doctors
        public function count_doctors() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM doctors_info");
            return $stmt->fetchColumn();
        }

        #Count reports
        public function count_patient() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM patient_info");
            return $stmt->fetchColumn();
        }
    
        #Fetch all appointment
        public function fetch_appointment() {
        
            $query = "SELECT a.*, d.*, p.* FROM appointments a
            INNER JOIN doctors_info d ON a.doctor_id = d.user_id 
            INNER JOIN patient_info p ON a.patient_id = p.user_id
            ORDER BY a.created_at DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }