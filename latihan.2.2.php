<?php
class belanja { //ini adalah kelas belanja


public string $namapembeli="dealova"; //ini adalah insteance variable, bertipe data string

public string $namabarang="es krim"; //ini adalah insteance variable, bertipe data string

public int $jumlahbarang=2; //ini adalah insteance variable, bertipe data integer

public int $hargabarang=10000; //ini adalah insteance variable, bertipe data integer

public float $totalbayar; //ini adalah insteance variable, bertipe data float/desimal

public float $diskon= 0.2; //ini adalah insteance variable, bertipe data float/desimal


public static float $pajak=0.02; //ini adalah static variable




//public function __constructor ($namapembeli): vold{
 //   $this->$namapembeli = $namapembeli; //ini adalah local variable
 
 public function hitungtotal(): float
{
    $subtotal = $this-> * $this->jumlahbarang;

    return $subtotal;
}
public function totaldiskon(): float
{
    $subdiskon = $this->hit * $this->diskon;

    return $subdiskon;
}

public function tampilkanrincian (){
    echo"nama pembeli : ". $this->namapembeli. "<br>";
    echo"namabarang : " . $this->namabarang . "<br>";
    echo"jumlahbarang : " . $this->jumlahbarang . "<br>";
    echo"hargabarang : " . $this->hargabarang . "<br>";
    echo"totaldiskon : " . $this->totaldiskon . "<br>";
    echo"totalbayar : " . $this->hitungtotal . "<br>";
}
}
//cari diskon dan total bayar





$belanja1 = new belanja();
$belanja1->tampilkanrincian();
?>
