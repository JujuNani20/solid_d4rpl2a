<?php

include_once "Shape2Dimension.php";

class Persegi implements Shape2Dimension
{
    public function calculateArea(): void
    {
        echo "Rumus dari Persegi Luas Dan Keliling nya adalah L = s x s , K = s x s x s x s \n";
    }
}
