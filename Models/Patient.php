<?php

    class Patient {
        private $conn;

        public $id;
        public $user_id;
        public $doctors_id;
        public $profile;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all appointment
        public function fetch_appointment($user_id) {
            $this->user_id = $user_id;
        
            $query = "SELECT a.*, d.*
            FROM appointments a
            JOIN doctors_info d ON a.doctor_id = d.user_id
            WHERE a.patient_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch feedback for users
        public function fetch_feedback($user_id) {
            $this->user_id = $user_id;
        
            $query = "SELECT m.*, d.*
            FROM medical_reports m
            JOIN doctors_info d ON m.doctor_id = d.user_id
            WHERE m.patient_id = :user_id AND status = 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch user profile
        public function user_profile($user_id) {

            $this->user_id = $user_id;
        
            $query = "SELECT u.*, p.* FROM user u
            JOIN patient_info p ON u.user_id = p.user_id
            WHERE u.user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        #Fetch services
        public function get_services() {
        
            $query = "SELECT id, service, amount FROM services";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch doctor's specialization
        public function get_specialization() {
        
            $query = "SELECT * FROM specialization";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch pains
        public function get_pain() {
        
            $query = "SELECT * FROM pains";
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
        public function count_appointment($user_id) {
            $this->user_id=$user_id;
    
            $stmt = $this->conn->query("SELECT count(*) FROM appointments WHERE patient_id = '$this->user_id'");
            return $stmt->fetchColumn();
        }

        #Count available doctors
        public function count_available_doctor() {
    
            $stmt = $this->conn->query("SELECT count(*) FROM doctors_info WHERE available = 1 ");
            return $stmt->fetchColumn();
        }

        #Count medical report
        public function count_report($user_id) {
    
            $stmt = $this->conn->query("SELECT count(*) FROM medical_reports WHERE patient_id = '$this->user_id' AND status=1");
            return $stmt->fetchColumn();
        }

        #fetch appointed doctor
        public function get_appointment_doc($uid) {

            $this->user_id = $uid;
        
            $query = "SELECT fullname FROM doctors_info WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
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