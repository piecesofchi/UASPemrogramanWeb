<?php
require_once "../core/Database.php";

class Buku extends Database {

    public function getTotal() {
        $result = $this->conn->query("SELECT COUNT(*) as total FROM buku");
        return $result->fetch_assoc()['total'];
    }

    public function getData($limit, $offset, $keyword = null) {
        $where = "";
        if ($keyword) {
            $where = "WHERE judul LIKE '%$keyword%' 
                      OR penulis LIKE '%$keyword%'";
        }

        return $this->conn->query("
            SELECT buku.*, kategori.nama_kategori
            FROM buku
            JOIN kategori ON buku.kategori_id = kategori.id
            $where
            LIMIT $limit OFFSET $offset
        ");
    }

    public function insert($judul, $penulis, $kategori_id) {
        return $this->conn->query("
            INSERT INTO buku VALUES (NULL,'$judul','$penulis',$kategori_id)
        ");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM buku WHERE id=$id");
    }
}
