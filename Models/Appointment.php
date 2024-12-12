<?php

    class Appointment {
        private $conn;
        private $table = 'users';

        public $user_id;
        public $status;
        public $doctor_id;
        public $patient_id;
        public $service;
        public $zoom_link;
        public $date;
        public $time;
        
        public function __construct($db) {
            $this->conn = $db;
        }
        
        #Doctors Registration
        public function book_appointment() {

            $query = "INSERT INTO appointments SET doctor_id = :doctor_id, patient_id = :patient_id, service = :service, link = :link, date = :date, time = :time, appointment_status = :appointment_status";
            $stmt = $this->conn->prepare($query);
                // $this->email = htmlspecialchars(strip_tags($this->email));
                // $this->user_id = htmlspecialchars(strip_tags($this->user_id));
            $stmt->bindParam(':appointment_status', $this->status, PDO::PARAM_STR);
            $stmt->bindParam(':doctor_id', $this->doctor_id, PDO::PARAM_STR);
            $stmt->bindParam(':patient_id', $this->patient_id, PDO::PARAM_STR);
            $stmt->bindParam(':service', $this->service, PDO::PARAM_STR);
            $stmt->bindParam(':link', $this->zoom_link, PDO::PARAM_STR);
            $stmt->bindParam(':date', $this->date, PDO::PARAM_STR);
            $stmt->bindParam(':time', $this->time, PDO::PARAM_STR);

            if ($stmt->execute()) {
                
                return true;
            }

            printf("Error: %s. \n", $stmt->error);
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