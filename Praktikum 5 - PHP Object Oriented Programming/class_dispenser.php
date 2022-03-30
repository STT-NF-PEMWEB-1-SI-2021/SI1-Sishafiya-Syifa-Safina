<?php

class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jari;
    public $tinggi;

    public function __construct($r, $tinggi){
        $this -> jari = $r;
        $this -> tinggi = $tinggi;
        echo "<br/>Jari-jari = " . $r . " cm";
        echo "<br/>Tinggi = " . $tinggi . " cm";
    }

    public function getVolumeWadah(){
        return self::PHI * $this -> jari * $this -> jari * $this -> tinggi;
    }
}

class Harga extends Dispenser{

    public function __construct($hargaSegelas){
        $this -> hargaSegelas = $hargaSegelas;
        echo "<br/>Harga 1 Gelas = " . $hargaSegelas;
    }
    public function getHarga(){
        return $this -> hargaSegelas * 5 ;
    }
}

    echo "<b> Diketahui: </b>";
    echo "<br/>  PHI = " . Dispenser :: PHI;

    $volumWadah = new Dispenser(30, 80);
    echo "<br/> Volume Wadah = " . $volumWadah -> getVolumeWadah() . " cm3";

    echo "<br/>";
    
    echo "<br/><b>Diketahui </b>";
    $harga = new Harga(1000);
    echo "<br/> Harga 5 Gelas adalah " . $harga -> getHarga();


?>