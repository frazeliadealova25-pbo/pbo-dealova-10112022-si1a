<?php

class BangunRuang {//class bangunruang

    public $jenis;//property
    public $sisi;
    public $jari;
    public $tinggi;

    function volume() {//method volume

        if($this->jenis == "Bola"){//kondisi perulangan if
            $v = 4/3 * 3.14 * $this->jari * $this->jari * $this->jari;

        }elseif($this->jenis == "Kerucut"){
            $v = 1/3 * 3.14 * $this->jari * $this->jari * $this->tinggi;

        }elseif($this->jenis == "Limas Segi Empat"){
            $v = 1/3 * ($this->sisi * $this->sisi) * $this->tinggi;

        }elseif($this->jenis == "Kubus"){
            $v = $this->sisi * $this->sisi * $this->sisi;

        }elseif($this->jenis == "Tabung"){
            $v = 3.14 * $this->jari * $this->jari * $this->tinggi;

        }else{
            $v = 0;
        }

        return $v;
    }

}

// array 
$data = [
["Bola",0,7,0],
["Kerucut",0,14,10],
["Limas Segi Empat",8,0,24],
["Kubus",30,0,0],
["Tabung",0,7,10]
];

echo "<table border='1' cellpadding='8'>";//output
echo "<tr>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>";

foreach($data as $d){//looping array

    $obj = new BangunRuang();//object
    $obj->jenis = $d[0];
    $obj->sisi = $d[1];
    $obj->jari = $d[2];
    $obj->tinggi = $d[3];

    $volume = $obj->volume();//membuat variable volume

    echo "<tr>//output
    <td>$obj->jenis</td>
    <td>$obj->sisi</td>
    <td>$obj->jari</td>
    <td>$obj->tinggi</td>
    <td>$volume</td>
    </tr>";
}

echo "</table>";

?>