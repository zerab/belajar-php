<?php

class Hewan
{
    public $warna;
    public $jumlah_kaki;
    public $suara;

    public function bersuara()
    {
        return "Hewan ini bersuara $this->suara";
    }
}
