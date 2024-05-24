<?php

require_once '../models/Order.php';

class OrderController {
    private $order;

    public function __construct($db) {
        $this->order = new Order($db);
    }

    // Funções CRUD aqui
}
?>
