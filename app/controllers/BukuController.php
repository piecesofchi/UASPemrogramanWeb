<?php
require_once "../core/Controller.php";
require_once "../app/models/Buku.php";
require_once "../app/models/Kategori.php";

class BukuController extends Controller {

    public function index() {
    $buku = new Buku();
    $kategori = new Kategori();

    $keyword = $_GET['keyword'] ?? null;

    $limit = 5;
    $page  = $_GET['page'] ?? 1;
    $offset = ($page - 1) * $limit;

    $total = $buku->getTotal();
    $totalPage = ceil($total / $limit);

    $data['buku'] = $buku->getData($limit, $offset, $keyword);
    $data['kategori'] = $kategori->getAll();
    $data['totalPage'] = $totalPage;
    $data['page'] = $page;
    $data['keyword'] = $keyword;

    $this->view('admin/buku/index', $data);
}


    public function store() {
        $buku = new Buku();
        $buku->insert(
            $_POST['judul'],
            $_POST['penulis'],
            $_POST['kategori_id']
        );
        header("Location: ../buku");
    }

    public function delete($id) {
        $buku = new Buku();
        $buku->delete($id);
        header("Location: ../../buku");
    }
}
