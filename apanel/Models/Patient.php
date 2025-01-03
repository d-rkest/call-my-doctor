<?php

    class Patient {
        private $conn;
        private $table = 'users';

        public $id;
        public $username;
        public $password;

        public $user_id;
        public $fullname;
        public $phone;
        public $address;
        public $passport;
        public $email;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all patient(s)
        public function fetch_patient() {
        
            $query = "SELECT p.*, u.*
            FROM patient_info p
            LEFT JOIN user u ON p.user_id = u.user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #View patient profile
        public function view_patient_profile($patient_id){
            $this->patient_id = $patient_id;
        
            $query = "SELECT u.*, p.* FROM user u
            JOIN patient_info p ON u.user_id = p.user_id
            WHERE u.user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->patient_id, PDO::PARAM_STR);
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