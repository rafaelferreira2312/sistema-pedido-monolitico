<?php

class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $first_name;
    public $last_name;
    public $document;
    public $email;
    public $phone_number;
    public $birth_date;
    public $created_at;
    public $updated_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Funções CRUD aqui
}
?>
