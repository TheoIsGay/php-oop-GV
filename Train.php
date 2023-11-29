<?php
class Train{
    

    function __construct(
        public $brand,
        public $trackGauge,
        private $mileage
        ){
            $this->brand = $brand;
            $this->trackGauge = $trackGauge;
            $this->mileage = $mileage;
        }
    function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage;
    }    
    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
    static function makeNoise(){
        echo "Choo, Choo!";
    }
}