<?php include '../header.php'; ?>

<div class="mb-20">
    <h2>Tambah Data Gudang (Jenis Barang)</h2>
    <a href="index.php" class="btn btn-secondary" style="width: auto;">Kembali</a>
</div>

<div style="max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
    <form action="aksi.php?aksi=tambah" method="POST">
        <div class="form-group">
            <label>Kode Jenis</label>
            <input type="text" name="kode_jenis" required>
        </div>
        <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis" required>
        </div>
        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php include '../footer.php'; ?>
