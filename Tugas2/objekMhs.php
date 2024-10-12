<?php 
require_once "classMhs.php";
$mahasiswa1 = new mahasiswa();
$mahasiswa1 -> nim = "23.240.0064".PHP_EOL;
$mahasiswa1 -> nama = "Muhamad Furqon".PHP_EOL;
$mahasiswa1 -> kelas = "3P41".PHP_EOL;
$mahasiswa1 -> ipk = 4 .PHP_EOL;

echo "NIM   : $mahasiswa1->nim";
echo "Nama  : $mahasiswa1->nama";
echo "Kelas : $mahasiswa1->kelas";
echo "IPK   : $mahasiswa1->ipk";
$mahasiswa1 ->keaktifan();

$mahasiswa2 = new mahasiswa();
$mahasiswa2 -> nim = "23.240.0981".PHP_EOL;
$mahasiswa2 -> nama = "Nur Fajar".PHP_EOL;
$mahasiswa2 -> kelas = "3P43".PHP_EOL;
$mahasiswa2 -> ipk = 2.16 .PHP_EOL;

echo "NIM   : $mahasiswa2->nim";
echo "Nama  : $mahasiswa2->nama";
echo "Kelas : $mahasiswa2->kelas";
echo "IPK   : $mahasiswa2->ipk";
$mahasiswa1 ->keaktifan();