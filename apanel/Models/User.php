<?php

    class User {
        private $conn;
        private $table = 'users';

        public $id;
        public $gender;
        public $password;

        public $user_id;
        public $fullname;
        public $phone;
        public $address;
        public $date_of_birth;
        public $email;
        
        public function __construct($db) {
            $this->conn = $db;
        }
        
        #Doctors Registration
        public function register_doctor() {

            $query = "INSERT INTO user SET email = :email, password = :password, user_id = :user_id";
            $stmt = $this->conn->prepare($query);
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->user_id = htmlspecialchars(strip_tags($this->user_id));
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);

            if ($stmt->execute()) {

                $sql = "INSERT INTO doctors_info SET fullname = :fullname, gender = :gender, phone = :phone, qualification = :qualification, address = :address, clinic_map = :clinic_map, user_id = :user_id";
                $stmt = $this->conn->prepare($sql);
                
                $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
                $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
                $stmt->bindParam(':qualification', $this->qualification, PDO::PARAM_STR);
                $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
                $stmt->bindParam(':clinic_map', $this->clinic_map, PDO::PARAM_STR);
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
    
                if ($stmt->execute()) {
                    return true;
                }
            }

            return false;
        }
        
        #Delete User Account
        // public function deleteUser() {
        //     $query = "DELETE FROM user, patient_info WHERE user_id = :user_id";
        //     $stmt = $this->conn->prepare($query);
        //     $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        //     $stmt->execute();
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //     return;
        // }
        
        public function checkUserExists() {
            $query = "SELECT id FROM user WHERE email = :email";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result > 0;
        }
    }