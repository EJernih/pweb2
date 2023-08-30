<?php
//buat kelas manusia
class manusia{
    //dengan properti nama saya
    public $nama_saya;

    //method yang digunakan panggil nama
    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
}

//class turunan atau sub class dari turunan manusia
class mahasiswa extends manusia
{
    //properti kelas turunan
    public $nama_mahasiswa;
    private $nim = "220302055";//mempraktikan enkapsulasi private di properti

    //method kelas turunan
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
    function panggil_nim(){
        return "NIM saya ". $this->nim;
        echo "NIM Saya ". $this->nim;

    }

    
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Emaloroes");
$informatika->panggil_mahasiswa("Jernih");

//tampilkan property
echo "Nama Depan Saya : ". $informatika->nama_saya. "</br>";
echo "Nama Belakang Saya : ". $informatika->nama_mahasiswa;

//COBA SIMULASIKAN BAGAIMANA MEMANGGIL PRIVATE CLASS DI DALAM KELAS TURUNAN
//mempraktekan enkapsulasi protected dan private ke dalam kelas pewarisan

?>