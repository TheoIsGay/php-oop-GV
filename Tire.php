<?php
class Tire{
    public $size;
    public $type;
    private $quality;
    
    function __construct($s , $t , $q){
        $this->size = $s;
        $this->type = $t;
        $this->quality = $q;
    }
    function __destruct(){
        echo "boom!<br>";
    }
}