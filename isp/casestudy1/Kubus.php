<?php

include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";

class Kubus implements Shape2Dimension, Shape3Dimension
{
    public function calculateArea(): void
    {
        echo "Rumus dari Luas Kubus ini adalah L = 2 x (pl + pt + lt) atau 6 x s² \n";
    }
    public function calculateVolume(): void
    {
        echo "Rumus dari Volume Kubus ini adalah V = s x s x s atau V = s³ \n";
    }
}
