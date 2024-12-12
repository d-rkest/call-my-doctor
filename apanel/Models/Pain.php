<?php
    class Pain {
        private $conn;
        private $table = 'pain';

        public $service_id;
        public $name;
        public $amount;
        public $status;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all service(s)
        public function fetch_pains() {
        
            $query = "SELECT * FROM pains ORDER BY id DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #Create new service
        public function create_new_pain(){
            $query = "INSERT INTO pains(pain_id, region) VALUES (:pain_id, :region)";

            $stmt = $this->conn->prepare($query);
                // Prepare data to prevent SQL injection (sanitize inputs)
                $this->pain_id = htmlspecialchars($this->pain_id);
                $this->region = htmlspecialchars($this->region);
            $stmt->bindParam(':pain_id', $this->pain_id, PDO::PARAM_STR);
            $stmt->bindParam(':region', $this->region, PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        #Delete service
        public function delete_pain($pain_id){
            $this->service_id = $pain_id;

            $query = "DELETE FROM pains WHERE id = :pain_id";

            $stmt = $this->conn->prepare($query);
                $this->pain_id = htmlspecialchars($this->pain_id);
            $stmt->bindParam(':pain_id', $this->pain_id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

    }