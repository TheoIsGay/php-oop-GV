<?php
class Chick {
    public $color;
    private $age;

    //Konstraktors
    function __construct($c, $a) {
        $this->color = $c;
        $this->age = $a;
    }

    //Destruktors
    function __destruct(){
        echo $this->color . " is nonexistent!<br>";
    }

    public function fly() {
        echo "Fly away ma " . $this->color . " chick";
    }
}