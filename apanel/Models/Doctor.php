<?php

    class Doctor {
        private $conn;
        private $table = 'users';

        public $id;
        public $user_id;
        public $fullname;
        public $email;
        public $phone;
        public $gender;
        public $clinic_map;
        public $password;
        public $address;
        public $qualification;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all doctor(s)
        public function fetch_doctors() {
        
            $query = "SELECT d.*, u.*
            FROM doctors_info d
            LEFT JOIN user u ON d.user_id = u.user_id
            ORDER BY u.created_at DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #View doctor profile
        public function view_doctor_profile($doctor_id){
            $this->doctor_id = $doctor_id;
        
            $query = "SELECT u.*, d.* FROM user u
            JOIN doctors_info d ON u.user_id = d.user_id
            WHERE u.user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->doctor_id, PDO::PARAM_STR);
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