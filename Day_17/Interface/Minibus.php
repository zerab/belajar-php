<?php

require "Mobil.php";
class Minibus implements Mobil
{
    public function berjalan()
    {
        return "Vrooom Vroomm";
    }

    public function berjalanMundur()
    {
        return "Mooorv Mooorv";
    }
}
