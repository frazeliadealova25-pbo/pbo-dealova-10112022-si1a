<?php
require_once __DIR__ . '/../class/Auth.php';
require_once __DIR__ . '/../class/Jenis.php';

$auth = new Auth();
$auth->checkAuth();

$jenisObj = new Jenis();
$id = $_GET['id'];

if ($jenisObj->hapus_data($id)) {
    header("Location: index.php?pesan=hapus_sukses");
} else {
    header("Location: index.php?pesan=hapus_gagal");
}
?>
