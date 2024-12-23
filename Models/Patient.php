<?php

    class Patient {
        private $conn;

        public $id;
        public $user_id;
        public $doctors_id;
        public $profile;
        public $student_folder;
        public $file_location;
        public $fullname;
        public $address;
        
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
    
        #Fetch pains
        public function get_pain() {
        
            $query = "SELECT * FROM pains";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch self_help_treatment
        public function self_help_treatment() {
        
            $query = "SELECT * FROM self_help";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        #Fetch traetment
        public function treatment($id) {
            $this->id=$id;
        
            $query = "SELECT * FROM self_help WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        #Upload Medical report
        public function upload_report($user_id) {
            $this->user_id=$user_id;
            
            // Set the upload directory
            $patient_folder = $this->user_id;
            $upload_dir = '../uploads/'.$patient_folder.'/';

            // Check if the directory exists, create it if not
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Set the maximum file size
            $max_file_size = 1024 * 1024 * 5; // 5MB
            $file_error = $this->file_error;

            // Check if the file was uploaded
            if ($file_error == 0) {
                // Get the file details
                $file_name  =   $this->file_name;
                $file_size  =   $this->file_size;
                $file_tmp   =   $this->file_tmp;

                // Check if the file size is within the limit
                if ($file_size <= $max_file_size) {
                    // Move the file to the upload directory
                    if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {

                        $query = "INSERT INTO medical_reports SET patient_id = :patient_id, report_type = :report_type, file_name = :file_name";
                        $stmt = $this->conn->prepare($query);
                            $this->user_id = htmlspecialchars(strip_tags($this->user_id));
                            $this->report_type = htmlspecialchars(strip_tags($this->report_type));
                        $stmt->bindParam(':patient_id', $this->user_id, PDO::PARAM_STR);
                        $stmt->bindParam(':file_name', $this->file_name, PDO::PARAM_STR);
                        $stmt->bindParam(':report_type', $this->report_type, PDO::PARAM_STR);


                        if ($stmt->execute()) {
                            return ["status" => true, "message" => "File uploaded successfully!"];
                        } else {
                            return ["status" => false, "message" => "Error updating file."];
                        }
                    } else {
                        return ["status" => false, "message" => "Error uploading file."];
                    }
                } else {
                    return ["status" => false, "message" => "File size exceeds the maximum allowed size."];
                }
            } else {
                return ["status" => false, "message" => "Error uploading file."];
            }

        }
        
        #Update patient profile
        public function update_patient($user_id) {
            $this->user_id = $user_id;

            // Update the profile_details in the database
            $query = "UPDATE patient_info SET name = :fullname, address = :address, phone = :phone WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":fullname", $this->fullname, PDO::PARAM_STR);
            $stmt->bindParam(":address", $this->address, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(":user_id", $this->user_id, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return ["status" => true, "message" => "Profile updated successfully."];
            } else {
                return ["status" => false, "message" => "Error updating profile."];
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