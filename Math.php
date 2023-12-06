<?php

class Math{
    static function addTwo($nr1 , $nr2){
        return $nr1 + $nr2;
    }
    static function factorial($nr){
        $fak = 1;
        for($i=$nr; $i>=1; $i--){
            $fak = $i * $fak;
        }
        echo "Faktorials no ". $nr . " ir ". $fak . "<br>";
    }
    static function sum($array){
        $sum = 0;
        foreach ($array as $i){
            $sum += $i;
        }
        return $sum;
    }
    static function  average($array){
        $element = count($array);
        $sum = array_sum($array);
        $average = $sum/$element;
        return $average;
    }
    static function max($array){
        $max = max($array);
        
        return $max;
    }
}