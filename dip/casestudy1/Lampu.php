<?php

include_once "BarangElektronik.php";

class Lampu implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Lampu itu Menyala........ \n";
    }
    public function berhenti(): void
    {
        echo "Lampu itu Berhenti Menyala........ \n";
    }
}
