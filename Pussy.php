<?php
include_once "Animal.php";
class Pussy extends Animal{
    public $color = "Light pink and a bit brown";
    
    
    static function woof(){
        echo "meow, meow!<br>";
    }
}