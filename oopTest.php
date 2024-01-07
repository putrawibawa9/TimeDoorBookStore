<?php

class bangunDatar {

    public float $alas =10;
    public float $tinggi =20;
    public float $hasil; 

    public function getLuas(){

    }
}


class segitiga extends bangunDatar{


    public function getLuas(){
        $this->hasil = 0.5 * $this->alas * $this->tinggi;
        echo $this->hasil;
    }

    // public function getKeliling(){
    //     $this->hasil = math.sqrt(($this->alas*$this->alas) + ($this->tinggi*$this->tinggi)) ;
    //     echo $this->hasil;
    // }
}


class persegi




$segitiga = new segitiga;

$segitiga->getLuas();