<?php

require "Mobil.php";
class Sedan extends Mobil
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
