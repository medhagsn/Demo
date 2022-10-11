<?php
class Car {
    static $wheels = 4;
    var $doors = 1;

    function ShowProperty() {
        Car::$wheels = 10;
        }
    } 
    $bmw = new Car();
    echo Car::$wheels;
    echo Car::$doors;
?>