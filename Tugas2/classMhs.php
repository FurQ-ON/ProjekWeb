<?php
class mahasiswa{
    var $nim;
    var $nama;
    var $kelas;
    var $ipk;
    function keaktifan(){
        if($this->ipk >= 3){
            echo "Mahasiswa Rajin".PHP_EOL;
        }elseif($this->ipk >= 2){
            echo "Mahasiswa Kurang Belajar".PHP_EOL;
        }else{
            echo "Mahasiswa Malas".PHP_EOL;
        }
    }
}