<?php

echo "siapa nama kamu: ";
$input_nama = fopen("php://stdin","r");
$nama = trim(fgets($input_nama));

echo "hello $nama, apa kabar?\n";


?>