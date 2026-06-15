<?php 
include '../header.php'; 
require_once __DIR__ . '/../class/Jenis.php';

$jenisObj = new Jenis();
$id = $_GET['id'];
$data = $jenisObj->get_data_by_id($id);
?>

<div class="mb-20">
    <h2>Edit Data Gudang (Jenis Barang)</h2>
    <a href="index.php" class="btn btn-secondary" style="width: auto;">Kembali</a>
</div>

<div style="max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
    <form action="aksi.php?aksi=edit" method="POST">
        <input type="hidden" name="kode_jenis_lama" value="<?php echo $data['kode_jenis']; ?>">
        <div class="form-group">
            <label>Kode Jenis</label>
            <input type="text" name="kode_jenis" value="<?php echo $data['kode_jenis']; ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis" value="<?php echo $data['jenis']; ?>" required>
        </div>
        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" value="<?php echo $data['satuan']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php include '../footer.php'; ?>
