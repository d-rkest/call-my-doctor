<?php

    class User {
        private $conn;
        private $table = 'user';

        public $gender;
        public $password;
        public $user_id;
        public $fullname;
        public $phone;
        public $address;
        public $date_of_birth;
        public $email;
        public $clinic_map;
        public $qualification;
        public $specialization;
        public $status;
        public $is_admin;
        public $brand;
        public $about;
        public $url;
        
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

                $sql = "INSERT INTO doctors_info SET fullname = :fullname, gender = :gender, phone = :phone, qualification = :qualification, clinic_map = :clinic_map, address = :address, specialty = :specialization, user_id = :user_id";
                $stmt = $this->conn->prepare($sql);
                
                $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
                $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
                $stmt->bindParam(':qualification', $this->qualification, PDO::PARAM_STR);
                $stmt->bindParam(':clinic_map', $this->clinic_map, PDO::PARAM_STR);
                $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
                $stmt->bindParam(':specialization', $this->specialization, PDO::PARAM_STR);
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

                $sql = "INSERT INTO patient_info SET name = :name, gender = :gender, phone = :phone, date_of_birth = :date_of_birth, address = :address, user_id = :user_id";
                $stmt = $this->conn->prepare($sql);
                
                $stmt->bindParam(':name', $this->fullname, PDO::PARAM_STR);
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
                $this->user_id = $row['user_id'];
                $this->email = $row['email'];
                return true;
            }

            return false;
        }
    
        #Fetch admin profile
        public function admin_profile($user_id) {

            $this->user_id = $user_id;
        
            $query = "SELECT * FROM user WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        #Fetch settings
        public function fetch_settings() {
        
            $query = "SELECT * FROM settings";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        #Change user password
        public function change_password($user_id, $current_password, $new_password) {
            
            $this->user_id = $user_id;
            $this->current_password = $current_password;
            $this->new_password = $new_password;

            
            // Validate inputs
            if (empty($user_id) || empty($current_password) || empty($new_password)) {
                return ["status" => false, "message" => "All fields are required."];
            }

            // Check if the user exists and the current password matches
            $query = "SELECT password FROM user WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":user_id", $this->user_id, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user < 0) {
                return ["status" => false, "message" => "User not found."];
            }

            if (!password_verify($this->current_password, $user['password'])) {
                return ["status" => false, "message" => "Current password is incorrect."];
            }

            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
            // Update the password in the database
            $updateQuery = "UPDATE user SET password = :password WHERE user_id = :user_id";
            $updateStmt = $this->conn->prepare($updateQuery);
            $updateStmt->bindParam(":password", $hashed_password, PDO::PARAM_STR);
            $updateStmt->bindParam(":user_id", $this->user_id, PDO::PARAM_STR);

            if ($updateStmt->execute()) {
                return ["status" => true, "message" => "Password changed successfully."];
            } else {
                return ["status" => false, "message" => "Error updating password."];
            }
        }
        
        #Delete Patient Account
        public function delete_patient($user_id) {
            $this->user_id=$user_id;

            $queryPatientInfo = "DELETE FROM patient_info WHERE user_id = :user_id";
            $stmtPatient = $this->conn->prepare($queryPatientInfo);
            $stmtPatient->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            

            if ($stmtPatient->execute()) {

                $queryUser = "DELETE FROM user WHERE user_id = :user_id";
                $stmtUser = $this->conn->prepare($queryUser);
                $stmtUser->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmtUser->execute();

                return true;
            }

            printf("Error: %s. \n", $stmt->error);
            return false;
        }
        
        #Delete Doctor Account
        public function delete_doctor($user_id) {
            $this->user_id=$user_id;

            $queryPatientInfo = "DELETE FROM doctors_info WHERE user_id = :user_id";
            $stmtPatient = $this->conn->prepare($queryPatientInfo);
            $stmtPatient->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            

            if ($stmtPatient->execute()) {

                $queryUser = "DELETE FROM user WHERE user_id = :user_id";
                $stmtUser = $this->conn->prepare($queryUser);
                $stmtUser->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmtUser->execute();

                return true;
            }

            printf("Error: %s. \n", $stmt->error);
            return false;
        }
        
        #Activate Doctor Account
        public function activate_user($user_id, $status) {
            $this->user_id = $user_id;
            $this->status = $status;

                $query = "UPDATE user SET status = :status WHERE user_id = :user_id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
                $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    return ["status" => true, "message" => "Account status updated."];
                } else {
                    return ["status" => false, "message" => "Unable to update status"];
                }
        }
        
        #Change user settngs
        public function update_settings() {

            // Update the settins in the database
            $query = "UPDATE settings SET brand = :brand, about = :about, email = :email, phone = :phone";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":brand", $this->brand, PDO::PARAM_STR);
            $stmt->bindParam(":about", $this->about, PDO::PARAM_STR);
            $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $this->phone, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return ["status" => true, "message" => "Settings updated successfully."];
            } else {
                return ["status" => false, "message" => "Error updating settings."];
            }
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