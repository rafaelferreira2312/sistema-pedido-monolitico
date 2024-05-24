<?php

class Order {
    private $conn;
    private $table = 'orders';

    public $id;
    public $user_id;
    public $description;
    public $quantity;
    public $price;
    public $created_at;
    public $updated_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Funções CRUD aqui
}
?>
