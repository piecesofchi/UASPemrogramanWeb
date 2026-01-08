<?php
require_once "../core/Database.php";

class User extends Database {

    public function login($email) {
        $query = "SELECT * FROM users WHERE email='$email'";
        return $this->conn->query($query);
    }
}
