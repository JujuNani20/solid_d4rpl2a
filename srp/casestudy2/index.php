<?php
include_once "MahasiswaView.php";

$mahasiswa = new Mahasiswa(nim:"2205014", nama:"Juju Nani");
$mahasiswaview = new MahasiswaView();

$mahasiswaview->showMahasiswa($mahasiswa);