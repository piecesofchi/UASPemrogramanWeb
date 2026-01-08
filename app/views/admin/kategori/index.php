<h2>Data Kategori</h2>

<form method="post" action="../kategori/store">
    <input type="text" name="nama" placeholder="Nama Kategori" required>
    <button type="submit">Tambah</button>
</form>

<br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $k['nama_kategori'] ?></td>
        <td>
            <a href="../kategori/delete/<?= $k['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="../dashboard/admin">Kembali</a>
