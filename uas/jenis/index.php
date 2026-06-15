<?php
include '../header.php';
require_once __DIR__ . '/../class/Jenis.php';
$jenisObj = new Jenis();
$data_jenis = $jenisObj->tampil_data();
?>

<div class="mb-20">
    <h2>Data Gudang (Jenis Barang)</h2>
    <a href="tambah.php" class="btn btn-primary" style="width: auto;">+ Tambah Data</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Jenis</th>
            <th>Jenis Barang</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($data_jenis as $row) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['kode_jenis']; ?></td>
            <td><?php echo $row['jenis']; ?></td>
            <td><?php echo $row['satuan']; ?></td>
            <td class="action-links">
                <a href="edit.php?id=<?php echo $row['kode_jenis']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?php echo $row['kode_jenis']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php include '../footer.php'; ?>
