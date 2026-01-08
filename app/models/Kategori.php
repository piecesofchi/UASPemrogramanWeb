<?php
require_once "../core/Database.php";

class Kategori extends Database {

    public function getAll() {
        return $this->conn->query("SELECT * FROM kategori");
    }

    public function insert($nama) {
        return $this->conn->query("INSERT INTO kategori VALUES (NULL, '$nama')");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM kategori WHERE id=$id");
    }
}
