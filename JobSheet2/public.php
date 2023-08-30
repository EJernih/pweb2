<?php
//membuat class mahasiswa
class mahasiswa{
    //berikut properti public dan private
    public $nama;
    private $nim="220302055";


    //membuat public method
    function tampilkan_nama() {
        //nilai kembalian nama
        return "Nama Saya Jernih </br>";
    }

    //membuat protected method
     function tampilkan_nim(){
        return "NIM Saya ".$this->nim;
    }
    //*untuk tipe public, boleh dituliskan publicnya atau tidak juga gapapa
} 

//membuat objek, harus keluar dari kelas

//menginstansiasi objek mahasiswa ke dalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa -> tampilkan_nama();
echo $nim -> tampilkan_nim();
?>