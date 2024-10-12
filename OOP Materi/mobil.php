<?php
class mobil{
    const AUTHOR = "Furqon";
    var ?string $nama;
    var ?string $merk;
    var ?string $warna=null;
    var int $tahun;
    var int $kecepatanMaks;
    public function __construct(string $nama,?string $merk){
        $this->nama = $nama;
        $this->merk = $merk;
    }
    function tambahKecepatan(){
        echo "Kecepatan Bertambah".PHP_EOL;
    }
    function infoMobil(?String $nama){
        if(is_null($nama)){
            echo "Nama Mobill adalah $this->nama".PHP_EOL;
        }else{
            echo "Mobil anda adalah $nama".PHP_EOL;
        }
    }
}