<?php
include_once "Vehicle.php";

class Train extends Vehicle{
  public $trackGauge;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

  public function __construct($brand, $trackGauge, $mileage) {
    parent::_construct($brand, $mileage);
    $this->trackGauge;
  }
 static function makeNoise(){
   echo "Vivi, Vivi! <br>";
 }

}