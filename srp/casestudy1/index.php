<?php
include_once "PenghitungPersegi.php";

$persegi = new Persegi(9);
$luas = new PenghitungPersegi();

echo $luas->hitungLuas($persegi);