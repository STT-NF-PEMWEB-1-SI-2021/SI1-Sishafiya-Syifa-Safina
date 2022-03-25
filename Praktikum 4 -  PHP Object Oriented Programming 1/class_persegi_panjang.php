<?php
    class PersegiPanjang{
        public $panjang;
        public $lebar;

        function __construct($panjang, $lebar){
            $this -> panjang = $panjang;
            $this -> lebar = $lebar;
        }

        function getLuas()
        {
            return $this->panjang * $this->lebar;
        }
        function getKeliling()
        {
            return 2 * ($this->panjang + $this->lebar);
            
        }
    }

    echo "LUAS PERSEGI PANJANG";
    $PersegiPanjang1 = new PersegiPanjang (25, 40);
    $PersegiPanjang2 = new PersegiPanjang (60, 18);
    
    echo "<br/>Luas Persegi Panjang I = ".$PersegiPanjang1->getLuas();
    echo "<br/>Luas Persegi Panjang II = ".$PersegiPanjang2->getLuas();

    echo "<br/>";
    echo "<br/>KELILING PERSEGI PANJANG";
    echo "<br/>Keliling Persegi Panjang I = ".$PersegiPanjang1->getKeliling();
    echo "<br/>Keliling Persegi Panjang II = ".$PersegiPanjang2->getKeliling();


?>