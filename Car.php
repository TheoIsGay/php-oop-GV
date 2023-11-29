<?php

class Car{
    public $brand;
    private $mileage;

    function __construct($b, $m) {
        $this->brand = $b;
        $this->mileage = $m;
    }
    function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage; 
    }
    public function increaseMileage($amount){
       $this->mileage += $amount;
       
    }
}
