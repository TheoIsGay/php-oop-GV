<?php
include_once "Vehicle.php";
class Car extends Vehicle{
    static $describe = "I'm a plastic pussy cunt<br>";
    

    
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
