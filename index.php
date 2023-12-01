<?php
include "Bitch.php";
include "Pussy.php";
include "Chick.php";
include "Car.php";
include "Tire.php";
include "Train.php";
echo "<h1>Get in whore, we're going shopping<br></h1>";


$myBitch = new Bitch("Reksis", 6);
$myPussy1 = new Pussy("Minis", 2);
$myPussy2 = new Pussy("Bricis", 3);
Pussy::woof();


/*
$myBitchNr2 = new Bitch;

$myChick = new Chick("black", 69);
//echo "ma Chick be " . $myChick->color . "<br>";
$myChick->fly();
echo "<br>";


$myChickNr2 = new Chick("white", 420);
$myChickNr2->fly();
echo "<br>";

$myBitch->color = "<b> Black like a nigger </b>";
echo $myBitch->color;


$myPussyNr1 = new Pussy;
$myPussyNr2 = new Pussy;
$myPussyNr3 = new Pussy;

$AllPussies = [];

for($i=0; $i<3; $i++){
    array_push($AllPussies, new Pussy);
    echo "<br>";
}

//var_export($AllPussies);
*/

//$myCar= new Car("bmw", 80008);
//$myCar2 = new Car("tesla", 420);
//echo $myCar->increaseMileage(420);
/*
$myTire1 = new Tire(69 , "Winter", "good");
echo $myTire1->size."<br>";
echo $myTire1->type."<br>";


echo Car:: $describe;
Car:: makeNoise();

$Train1 = new Train("idk", 2, 90);
echo $Train1->increaseMileage(240);
Train:: makeNoise();
*/