<?php
include_once "Mahasiswa.php";

class MahasiswaView{

    public function showMahasiswa(Mahasiswa $mahasiswa){
        echo("Nama: ". $mahasiswa->getNama(). "<br>Nim: ". $mahasiswa->getNim());
    }
}
