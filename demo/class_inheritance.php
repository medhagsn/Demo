<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function CreateDoors() {
        $this -> doors = 6;;
        }
    } 
    $bmw = new Car();

    class Plane extends Car {
        
        }

        if(class_exists("Plane")){
            echo "Exists.";
        }
        $jet = new Plane();
        $jet -> CreateDoors();
        echo $jet -> doors;

?>