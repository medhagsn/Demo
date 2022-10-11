<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function WheelsMOve() {
        $this -> wheels = 10;
    }
    } 

$bmw = new Car();
$bmw ->WheelsMOve();
echo $bmw -> wheels;
?>

