<?php
include '../header.php';
require_once __DIR__ . '/../class/Database.php';

$db = new Database();
$koneksi = $db->getConnection();

// Laporan Penjualan Query
$query = "
    SELECT p.no_penjualan, p.tanggal_penjualan, c.nama_customer, b.nama_barang, 
           dp.jumlah_barang, dp.harga_barang, dp.total_harga
    FROM tb_penjualan p
    JOIN detail_penjualan dp ON p.no_penjualan = dp.no_penjualan
    JOIN tb_customer c ON p.id_customer = c.id_customer
    JOIN tb_barang b ON dp.kd_barang = b.kd_barang
    ORDER BY p.tanggal_penjualan DESC
";

$result = $koneksi->query($query);
?>

<div class="mb-20">
    <h2>Laporan Transaksi Penjualan</h2>
    <button onclick="window.print()" class="btn btn-secondary" style="width: auto;">Print Laporan</button>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>No Penjualan</th>
            <th>Tanggal</th>
            <th>Customer</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $grand_total = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $grand_total += $row['total_harga'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['no_penjualan']; ?></td>
            <td><?php echo $row['tanggal_penjualan']; ?></td>
            <td><?php echo $row['nama_customer']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['jumlah_barang']; ?></td>
            <td>Rp <?php echo number_format($row['harga_barang'], 0, ',', '.'); ?></td>
            <td>Rp <?php echo number_format($row['total_harga'], 0, ',', '.'); ?></td>
        </tr>
        <?php 
            } 
        } else {
            echo "<tr><td colspan='8' class='text-center'>Tidak ada data transaksi penjualan</td></tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="7" style="text-align: right;">Total Keseluruhan</th>
            <th>Rp <?php echo number_format($grand_total, 0, ',', '.'); ?></th>
        </tr>
    </tfoot>
</table>

<?php include '../footer.php'; ?>
