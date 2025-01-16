<?php
    namespace Models;

    class User {
        private $conn;
        private $table = 'users';

        public $id;
        public $gender;
        public $password;
        public $email;
        
        public function __construct($db) {
            $this->conn = $db;
        }
        
    }