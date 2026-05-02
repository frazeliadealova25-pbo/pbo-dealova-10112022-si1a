<?php
class manusia{
    public $nama="ardi";
    var $kelas = "si 2";

    function tampilkan_nama(){
        return $this->nama;
    }

    public function tampilkan_kelas(){
        return $this->kelas;
    }

}
$manusia = new manusia();

echo "nama : ".$manusia->tampilkan_nama() ."\n";
echo "kelas : ".$manusia->tampilkan_kelas();
?>