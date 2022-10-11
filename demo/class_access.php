<?php

class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function ShowProperty() {
        $this -> wheels = 10;
        }
    } 
    $bmw = new Car();
    $semi = new Semi();
    
    class Semi extends Car {
        function showProperty() {
            echo $this->engine;
        }
    }
    echo $semi->showProperty();



?>