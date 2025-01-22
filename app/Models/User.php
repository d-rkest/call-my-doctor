<?php
    namespace Models;

    class User {

        private $pdo;
    
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
    
        public function getUserByUsername($email) {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
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