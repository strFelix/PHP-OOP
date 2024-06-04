<?php

class Car{
    
    //properties
    public $brand;
    public $model;

    //methods
    public function StartEngine(){
        //concatenate string and propertyes -> In same scope use -this- function
        echo $this->brand . " " . $this->model . " engine Started!";
    }
}

//instance object
$car = new Car();
// Show object structure -> var_dump($object);

$car->brand = "Audi";
$car->model = "A3";
$car -> StartEngine();

/* Print Property
    echo "<br>";
    echo $car->brand;
*/