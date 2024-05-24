<?php

require_once '../models/User.php';

class UserController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    // Funções CRUD aqui
}
?>
