<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: beranda.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Stok Gudang Barang</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="login-body">
    <div class="login-container">
        <h2>Sistem Informasi Stok Gudang Barang</h2>
        <h3>Politeknik Negeri Subang</h3>
        
        <div style="margin: 20px 0;">
            <img src="https://cdn-icons-png.flaticon.com/512/3050/3050430.png" alt="Store Icon" style="width: 80px;">
        </div>

        <p style="margin-bottom: 15px; font-weight: 500;">SILAHKAN LOGIN</p>
        
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<p style='color: red; margin-bottom: 10px; font-size: 12px;'>Login gagal! Username dan password salah!</p>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<p style='color: green; margin-bottom: 10px; font-size: 12px;'>Anda telah berhasil logout</p>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<p style='color: red; margin-bottom: 10px; font-size: 12px;'>Anda harus login untuk mengakses halaman ini</p>";
            }
        }
        ?>

        <form action="login-aksi.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-primary" style="background-color: #5bc0de;">Reset</button>
        </form>
    </div>
</body>
</html>