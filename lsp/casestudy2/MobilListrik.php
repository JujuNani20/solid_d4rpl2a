<?php

include_once "KendaraanListrik.php";

class MobilListrik implements KendaraanListrik
{
    public function menggunakanBaterai(): void
    {
        echo "Mobil ini dikategorikan mobil masa depan yang akan menggunakan Listrik.........\n";
    }
}
