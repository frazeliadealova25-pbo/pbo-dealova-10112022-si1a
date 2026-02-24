<?php

class Pegadaian {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $terlambat;

    // Hitung total pinjaman + bunga
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // Hitung angsuran per bulan
    public function angsuranPerBulan() {
        return $this->totalPinjaman() / $this->lama;
    }

    // Hitung denda keterlambatan (0.15% per hari dari angsuran)
    public function denda() {
        return $this->angsuranPerBulan() * 0.0015 * $this->terlambat;
    }

    // Total pembayaran
    public function totalBayar() {
        return $this->angsuranPerBulan() + $this->denda();
    }
}

// Membuat objek
$data = new Pegadaian();

// Mengambil data dari form (keamanan dasar sesuai PPT)
$data->pinjaman  = htmlspecialchars($_POST['pinjaman']);
$data->bunga     = htmlspecialchars($_POST['bunga']);
$data->lama      = htmlspecialchars($_POST['lama']);
$data->terlambat = htmlspecialchars($_POST['terlambat']);

echo "<h2>Hasil Perhitungan</h2>";
echo "Total Pinjaman : Rp " . $data->totalPinjaman() . "<br>";
echo "Angsuran Per Bulan : Rp " . $data->angsuranPerBulan() . "<br>";
echo "Denda Keterlambatan : Rp " . $data->denda() . "<br>";
echo "Total Pembayaran : Rp " . $data->totalBayar();

?>