<?php
abstract class Animal {
    public $name;
    protected $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

    }
    function birthday(){
        $this->$age += 1;
    }
    abstract static function woof();
}
