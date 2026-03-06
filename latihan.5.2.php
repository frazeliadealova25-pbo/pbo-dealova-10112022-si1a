<?php

function formatrupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class BelanjaWarung {
    public $namapembeli;
    public $namabarang;
    public $hargabarang;
    public $jumlahbeli;

public function hitungsubtotal(): float|int {
    return $this->hargabarang * $this->jumlahbeli;
}

public function hitungdiskon($subtotal): float|int {
    if ($subtotal > 100000) {
        return $subtotal * 0.1;
    }
    return 0;
}

public function hitungtotal(): float|int {
    $subtotal = $this->hitungsubtotal();
    $diskon = $this->hitungdiskon(subtotal: $subtotal);
    return $subtotal- $diskon;
   }
}

$databelanja = [

[ 
    "nama" => "Budi",
    "barang" => "Gula 1 kg",
    "harga" => 65000,
    "jumlah" => 2
  ],

  [
    "nama" => "Sinta",
    "barang" => "Minyak 1 L",
    "harga" => 140000,
    "jumlah" => 1
  ]

];

echo "<h2>TRANSAKSI 1</h2>";

$errors1 = [];

$nama = $databelanja[0] ["nama"];
$barang = $databelanja[0] ["barang"];
$harga = $databelanja[0] ["harga"];
$jumlah = $databelanja[0] ["jumlah"];

if (empty($nama)) {
    $errors1[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors1[] = "Harga harus lebih dari 0.";
}

if ($jumlah <= 0) {
    $errors1[] = "Jumlah beli harus lebih dari 0.";
}

if (!empty($errors1)) {
    foreach ($errors1 as $error) {
        echo $error . "<br>";
    }

} else {

$belanja1 = new BelanjaWarung();
$belanja1->namapembeli = $nama;
$belanja1->namabarang = $barang;
$belanja1->hargabarang = $harga;
$belanja1->jumlahbeli = $jumlah;

$subtotal = $belanja1->hitungsubtotal();
$diskon = $belanja1->hitungdiskon(subtotal: $subtotal);
$total = $belanja1->hitungtotal();

echo "pembeli : $belanja1->namapembeli<br>";
echo "barang : $belanja1->namabarang<br>";
echo "subtotal : " . formatrupiah(angka: $subtotal) . "<br>";
echo "diskon : " . formatrupiah(angka: $diskon) . "<br>";
echo "<b>total bayar: " . formatrupiah(angka: $total) . "</b><br><br>";
}


echo "<h2> TRANSAKSI 2</h2>";

$errors2 = [];

$nama = $databelanja[1] ["nama"];
$barang = $databelanja[1] ["barang"];
$harga = $databelanja[1] ["harga"];
$jumlah = $databelanja[1] ["jumlah"];

if (empty($nama)) {
    $errors2[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors2[] = "Harga harus lebih dari 0.";
}

if ($jumlah <= 0) {
    $errors2[] = "Jumlah beli harus lebih dari 0.";
}

if (!empty($errors2)) {
    foreach ($errors2 as $error) {
        echo $error . "<br>";
    }

} else {

$belanja2 = new BelanjaWarung();
$belanja2->namapembeli = $nama;
$belanja2->namabarang = $barang;
$belanja2->hargabarang = $harga;
$belanja2->jumlahbeli = $jumlah;

$subtotal = $belanja2->hitungsubtotal();
$diskon = $belanja2->hitungdiskon(subtotal: $subtotal);
$total = $belanja2->hitungtotal();

echo "pembeli : $belanja1->namapembeli<br>";
echo "barang : $belanja1->namabarang<br>";
echo "subtotal : " . formatrupiah(angka: $subtotal) . "<br>";
echo "diskon : " . formatrupiah(angka: $diskon) . "<br>";
echo "<b>total bayar: " . formatrupiah(angka: $total) . "</b><br><br>";
}

?>