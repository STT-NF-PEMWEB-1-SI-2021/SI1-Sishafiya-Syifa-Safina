<?php
    require_once "class_bmipasien.php";

    class BMI extends BMIPasien{
        public $bb;
        public $tb;
    
        public function __construct($bb, $tb){
            $this -> berat = $bb;
            $this -> tinggi = $tb;
        }
    
        function getnilaiBMI(){
            return $this->bmi = $this->berat / ($this->tinggi * $this->tinggi);
        }
    
        function getstatusBMI(){
    
            if ($this->bmi >= 30){
                return "Kegemukan (obesitas)";
            }
            else if ($this->bmi >= 25){
                return "Kelebihan berat badan";
            }
            else if ($this->bmi >=18.5){
                return "Normal (ideal)";
            }
            else if($this->bmi < 18.5){
                return "Kekurangan berat badan";
            }
        }
    
    }
?>