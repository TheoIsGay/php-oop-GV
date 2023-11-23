<?php
include "Bitch.php";
include "Pussy.php";

$myBitch = new Bitch;
$myBitchNr2 = new Bitch;

$myBitch->color="Black like a nigger";
echo $myBitch->color;

/*
$myPussyNr1 = new Pussy;
$myPussyNr2 = new Pussy;
$myPussyNr3 = new Pussy;
*/
$AllPussies = [];

for($i=0; $i<3; $i++){
    array_push($AllPussies, new Pussy);
}

var_export($AllPussies);