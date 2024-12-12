<?php
    class Service {
        private $conn;
        private $table = 'services';

        public $service_id;
        public $name;
        public $amount;
        public $status;
        
        public function __construct($db) {
            $this->conn = $db;
        }
    
        #Fetch all service(s)
        public function fetch_services() {
        
            $query = "SELECT * FROM services WHERE status = 1 ORDER BY id DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        #Create new service
        public function create_new_service(){
            $query = "INSERT INTO services(service, amount) VALUES (:name, :amount)";

            $stmt = $this->conn->prepare($query);
                // Prepare data to prevent SQL injection (sanitize inputs)
                $this->name = htmlspecialchars($this->name);
                $this->amount = htmlspecialchars($this->amount);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':amount', $this->amount, PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        #Delete service
        public function delete_service($service_id){
            $this->service_id = $service_id;

            $query = "DELETE FROM services WHERE id = :service_id";

            $stmt = $this->conn->prepare($query);
                $this->service_id = htmlspecialchars($this->service_id);
            $stmt->bindParam(':service_id', $this->service_id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

    }