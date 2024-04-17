<?php

include_once "FiturScan.php";
include_once "FiturCetak.php";

class PrinterMidRange implements FiturScan, FiturCetak
{
    public function cetakKertas(): void
    {
        echo "Mencetak dengan Kertas Printer Menengah......... \n";
    }
    public function scanKertas(): void
    {
        echo "MenScan dengan Kertas Printer Menengah......... \n";
    }
}
