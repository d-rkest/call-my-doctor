<?php

    class User {
        private $conn;
        private $table = 'users';

        public $id;
        public $gender;
        public $password;
        public $old_password;
        public $new_password;
        public $confirm_password;

        public $user_id;
        public $fullname;
        public $phone;
        public $address;
        public $date_of_birth;
        public $available;
        public $email;
        
        public function __construct($db) {
            $this->conn = $db;
        }
        
        #Doctors Registration
        public function register_doctor() {

            $this->is_admin = 2;

            $query = "INSERT INTO user SET email = :email, password = :password, user_id = :user_id, is_admin = :is_admin";
            $stmt = $this->conn->prepare($query);
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->user_id = htmlspecialchars(strip_tags($this->user_id));
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->bindParam(':is_admin', $this->is_admin, PDO::PARAM_INT);

            if ($stmt->execute()) {

                $sql = "INSERT INTO doctors_info SET fullname = :fullname, gender = :gender, phone = :phone, qualification = :qualification, clinic_map = :clinic_map, user_id = :user_id";
                $stmt = $this->conn->prepare($sql);
                
                $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
                $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
                $stmt->bindParam(':qualification', $this->qualification, PDO::PARAM_STR);
                $stmt->bindParam(':clinic_map', $this->clinic_map, PDO::PARAM_STR);
                // $stmt->bindParam(':specialization', $this->specialization, PDO::PARAM_STR);
                $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmt->execute();
                
                return true;
            }

            printf("Error: %s. \n", $stmt->error);
            return false;
        }

        #Patient Registration
        public function register() {

            $query = "INSERT INTO user SET email = :email, password = :password, user_id = :user_id";
            $stmt = $this->conn->prepare($query);
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->user_id = htmlspecialchars(strip_tags($this->user_id));
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);

            if ($stmt->execute()) {

                $sql = "INSERT INTO patient_info SET fullname = :fullname, gender = :gender, phone = :phone, date_of_birth = :date_of_birth, address = :address, user_id = :user_id";
                $stmt = $this->conn->prepare($sql);
                
                $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
                $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
                $stmt->bindParam(':date_of_birth', $this->date_of_birth, PDO::PARAM_STR);
                $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
                $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmt->execute();
                
                return true;
            }

            printf("Error: %s. \n", $stmt->error);
            return false;
        }

        #Admin Login Model
        public function login() {
            
            $query = "SELECT * FROM user WHERE email = :email AND is_admin = 1 ";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($this->password, $row['password'])) {
                $this->id = $row['id'];
                $this->email = $row['email'];
                return true;
            }

            return false;
        }

        #Doctors Login Model
        public function login_doctor() {
            
            $query = "SELECT * FROM user WHERE email = :email AND is_admin = 2 ";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($this->password, $row['password'])) {
                $this->user_id = $row['user_id'];
                $this->email = $row['email'];
                return true;
            }

            return false;
        }

        #Doctors Login Model
        public function login_patient() {
            
            $query = "SELECT * FROM user WHERE email = :email AND is_admin = 0 ";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($this->password, $row['password'])) {
                $this->user_id = $row['user_id'];
                $this->email = $row['email'];
                return true;
            }

            return false;
        }
        
        #Activate Doctor Account
        public function doctor_online_status($user_id) {
            $this->user_id=$user_id;

            $queryUser = "UPDATE doctors_info SET available = :available WHERE user_id = :user_id";
            $stmtUser = $this->conn->prepare($queryUser);
            $stmtUser->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmtUser->bindParam(':available', $this->available, PDO::PARAM_INT);
            $stmtUser->execute();

            return true;
        }
        
        #Change user password
        public function change_password($user_id) {
            
            $this->user_id = $user_id;
            
            $query = "SELECT user_id, password FROM user WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($this->old_password, $row['password'])) {

                $this->password = password_hash($this->new_password, PASSWORD_DEFAULT);

                $query = "UPDATE user SET password = :password WHERE user_id = :user_id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
                $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmt->execute();
                
                return true;
            }

            return false;
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