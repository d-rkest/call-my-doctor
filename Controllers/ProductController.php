<?php
require_once '../config/databaseConfig.php';
require_once '../Models/Product.php';

class ProductController {
    private $db;
    private $product;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->product = new Product($db);
    }

    public function getAllProducts() {
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        
        if ($category && $category !== 'all') {
            $stmt = $this->product->readByCategory($category);
        } else {
            $stmt = $this->product->read();
        }
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}