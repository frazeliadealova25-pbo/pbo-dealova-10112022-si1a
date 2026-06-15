<?php
require_once __DIR__ . '/../class/Auth.php';
require_once __DIR__ . '/../class/Jenis.php';

$auth = new Auth();
$auth->checkAuth();

$jenisObj = new Jenis();

$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    $kode_jenis = $_POST['kode_jenis'];
    $jenis = $_POST['jenis'];
    $satuan = $_POST['satuan'];
    
    if ($jenisObj->tambah_data($kode_jenis, $jenis, $satuan)) {
        header("Location: index.php?pesan=tambah_sukses");
    } else {
        header("Location: index.php?pesan=tambah_gagal");
    }
} else if ($aksi == 'edit') {
    $kode_jenis_lama = $_POST['kode_jenis_lama'];
    $kode_jenis = $_POST['kode_jenis'];
    $jenis = $_POST['jenis'];
    $satuan = $_POST['satuan'];
    
    if ($jenisObj->edit_data($kode_jenis_lama, $kode_jenis, $jenis, $satuan)) {
        header("Location: index.php?pesan=edit_sukses");
    } else {
        header("Location: index.php?pesan=edit_gagal");
    }
}
?>
