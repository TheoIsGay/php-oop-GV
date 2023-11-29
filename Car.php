<?php

class Car{
    static $describe = "I'm a plastic pussy cunt<br>";
    

    function __construct(public $brand,private $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage; 
    }
    public function increaseMileage($amount){
       $this->mileage += $amount;
       
    }
    static function makeNoise(){
        echo "Beep, Beep!<br>";
    }
}
