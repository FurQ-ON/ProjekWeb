<?php
require_once "mobil.php";

$mobilSatu = new mobil("Avanza","Toyota");
$mobilSatu->tahun = 2019;

$mobilDua = new mobil("Brio",null);
$mobilDua->tahun = 2020;

echo $mobilSatu->infoMobil(null). PHP_EOL;
echo $mobilDua->infoMobil(null);
