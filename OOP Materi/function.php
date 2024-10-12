<?php
require_once "Mobil.php";

$mobilSatu =  new mobil("M3", "BMW" );

// $mobilSatu->nama = "Avanza";
// $mobilSatu -> merk = "Toyota";
$mobilSatu -> warna = null;
$mobilSatu -> tahun = 2019;
$mobilSatu -> kecepatanMaks = 1300;

echo "Nama : $mobilSatu->nama".PHP_EOL;
echo "Merk : $mobilSatu->merk".PHP_EOL;
echo "Warna : $mobilSatu->warna".PHP_EOL;
echo "Tahun : $mobilSatu->tahun".PHP_EOL;
echo "Kecepatan : $mobilSatu->kecepatanMaks".PHP_EOL;

$mobilSatu->tambahKecepatan();
$mobilSatu->infoMobil(null);
$mobilSatu->infoMobil("Xenia");
echo mobil::AUTHOR;