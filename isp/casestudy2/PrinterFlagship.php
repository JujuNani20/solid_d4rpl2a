<?php

include_once "FiturScan.php";
include_once "FiturCetak.php";
include_once "FiturFax.php";

class PrinterFlagship implements FiturScan, FiturCetak, FiturFax
{
    public function cetakKertas(): void
    {
        echo "Mencetak dengan Kertas Printer Mahal......... \n";
    }
    public function terimaFax(): void
    {
        echo "Terima Fax dengan Printer Mahal......... \n";
    }
    public function scanKertas(): void
    {
        echo "MenScan dengan Kertas Printer Mahal......... \n";
    }
}
