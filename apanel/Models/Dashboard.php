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
        
            $query = "SELECT * FROM appointments";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }