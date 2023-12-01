<?php
include_once "Animal.php";
class Bitch extends Animal{
    public $color;
    
    static function woof(){
        echo "Woof, woof!<br>";
    }
}