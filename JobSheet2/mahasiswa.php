<?php

//membuat class
class mahasiswa{
    //menuliskan properti
    var $nim;
    var $nama;
    var $alamat;
    
    //membuat method
    function tampil_nama() {
        //nanti disini ada isinya :
        return "nama saya jernih";
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
echo "<br>";


//ini kalo di run masih kosong, karena ga ada return untuk mengembalikan nilainya.
//jadi kalo mau nampilin nama, isi di method tampil nama.

//TASK JOB SHEET 2 POIN 1
//buat class : dosen
//dengan property : 1. nidn
//                  2. nama -> nampilin nama sendiri
//                  3. prodi

    //membuat class dosen
    class Dosen {
        var $nidn;
        var $nama;
        var $prodi;
        
        //membuat method 
        function tampil_nama() {
            return "Nama Saya Emaloroes Jernih Arifin";
        }

        function tampil_prodi() {
            
        }
    }

    //membuat objek nama dosen
    $nama_dosen = new dosen();

    //menampilkan ke layar
    echo $nama_dosen ->tampil_nama();

?>