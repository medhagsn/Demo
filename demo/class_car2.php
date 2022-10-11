<?php
class Car{
 function MoveWheels(){
    echo "Wheels move.";
 }
}

if (method_exists("Car","MoveWheels")){
    echo "Exists.";
} else {
    echo "Does not exist.";
}

