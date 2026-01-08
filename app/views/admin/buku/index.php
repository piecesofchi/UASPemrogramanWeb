<?php require_once "../app/views/layout/header.php"; ?>

<h2>Data Buku</h2>

<h3 class="mb-3">Data Buku</h3>

<form method="post" action="/perpustakaan/buku/store" class="row g-2 mb-4">
    <div class="col-md-4">
        <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
    </div>
    <div class="col-md-4">
        <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
    </div>
    <div class="col-md-3">
        <select name="kategori_id" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach($kategori as $k): ?>
                <option value="<?= $k['id'] ?>">
                    <?= $k['nama_kategori'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-1 d-grid">
        <button class="btn btn-primary">Tambah</button>
    </div>
</form>


<br>

<form method="get">
    <input type="text" name="keyword" placeholder="Cari buku..."
           value="<?= $keyword ?>">
    <button type="submit">Cari</button>
</form>
<br>

<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($buku as $b): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $b['judul'] ?></td>
        <td><?= $b['penulis'] ?></td>
        <td><?= $b['nama_kategori'] ?></td>
        <td>
            <a href="/perpustakaan/buku/delete/<?= $b['id'] ?>" 
   class="btn btn-sm btn-danger"
   onclick="return confirm('Hapus buku?')">
   Hapus
</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>


<nav>
  <ul class="pagination">
    <?php for ($i = 1; $i <= $totalPage; $i++): ?>
      <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
        <a class="page-link" 
           href="/perpustakaan/buku?page=<?= $i ?>&keyword=<?= $keyword ?>">
           <?= $i ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>
</nav>

<br>
<a href="../dashboard/admin">Kembali</a>

<?php if ($totalPage > 1): ?>
    <br><br>
    <b>Halaman:</b>
    <?php for ($i = 1; $i <= $totalPage; $i++): ?>
        <a href="/perpustakaan/buku?page=<?= $i ?>&keyword=<?= $keyword ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>
<?php endif; ?>

<?php require_once "../app/views/layout/footer.php"; ?>
