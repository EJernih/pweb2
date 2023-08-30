<?php

//membuat class
class mahasiswa{
    //menuliskan properti
    var $nim;
    var $nama;
    var $alamat;

    
    //membuat method
    function __construct() {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    function __destruct() {
        echo "Politeknik Negeri Cilacap";
    }
    
    function tampil_nama() {
        //nanti disini ada isinya :
        return "Nama Saya Jernih </br>";
    }
    
    function tampil_mahasiswa() {
        return "Tidak akan menjadi joki atau
        menggunakan jasa joki sampai lulus kuliah </br>";
    }
    //membuat method
    function tampil_alamat() {
        //nanti disini ada isinya
    }
}
    
//membuat objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan ke layar; pasti menggunakan echo

echo $nama_mahasiswa -> tampil_nama();
echo $nama_mahasiswa -> tampil_mahasiswa();

