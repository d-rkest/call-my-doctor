<?php
    namespace Config;
    use PDO; // Add this if using PHP's built-in PDO
    
    class Database {
        private $host       =   "localhost";
        private $dbname     =   "callmydo_db";
        private $username   =   "callmydo_admin";
        private $password   =   "QaJw8{iH5bS8";

        public $conn;

        public function getConnection() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=".$this->host . "; dbname=". $this->dbname, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection error:" . $e->getMessage();
            }

            return $this->conn;
            
        }
    }