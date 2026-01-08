<?php
require_once "../core/Controller.php";
require_once "../app/models/Kategori.php";

class KategoriController extends Controller {

    public function index() {
        $kategori = new Kategori();
        $data['kategori'] = $kategori->getAll();
        $this->view('admin/kategori/index', $data);
    }

    public function store() {
        $kategori = new Kategori();
        $kategori->insert($_POST['nama']);
        header("Location: ../kategori");
    }

    public function delete($id) {
        $kategori = new Kategori();
        $kategori->delete($id);
        header("Location: ../../kategori");
    }
}
