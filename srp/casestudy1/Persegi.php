<?php
class Persegi{
    private int $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function getSisi(){

        return $this->sisi;
    }
}