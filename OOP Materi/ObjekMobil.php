<?php
require_once "mobil.php";

$mobilSatu = new mobil("Avanza", "Toyota");

// $mobilSatu -> nama = "Avanza";
// $mobilSatu -> merk = "Toyota";
$mobilSatu -> warna = "Hitam";
$mobilSatu -> tahun = 2019;
$mobilSatu -> kecepatanMaks = 1300;

echo "Nama : $mobilSatu->nama".PHP_EOL;
echo "Merk : $mobilSatu->merk".PHP_EOL;
echo "Warna : $mobilSatu->warna".PHP_EOL;
echo "Tahun : $mobilSatu->tahun".PHP_EOL;
echo "Kecepatan : $mobilSatu->kecepatanMaks".PHP_EOL;

$mobilDua = new mobil("Mercy", "Toyota");

// $mobilDua -> nama = "Avanza";
// $mobilDua -> merk = "Toyota";
$mobilDua -> warna = "Hitam";
$mobilDua -> tahun = 2019;
$mobilDua -> kecepatanMaks = 1300;

var_dump($mobilDua);