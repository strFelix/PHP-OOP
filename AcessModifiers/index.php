<?php

//private: A class member can be accessed only from the class itself.
//protected: A class member can be accessed only from the class itself and its subclasses, use getters and setters to access the protected members.
//public: A class member can be accessed from anywhere.


class Veicle {
    protected $model;
    private $color;
    public $year;

    //getters and setters
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }

    //methods
    public function Foward(){
        echo "<br>"."The veicle is moving foward"."<br>";
    }

    private function Stop(){
        echo "<br>"."The veicle is stopped"."<br>";
    }

    public function Action(){
        $this->Stop();
    }
}

class Car extends Veicle{

    public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model = $model;
    }

    public function openDoor(){
        echo "<br>"."The door is open"."<br>";
    }
}

class MotorCycle extends Veicle{

    public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model = $model;
    }

    public function wheelie(){
        echo "<br>"."The motorcycle is doing a wheelie"."<br>";
    }
}

$car = new Car();
$car->setModel("Civic");
$car->setColor("Black");
$car->year = 2020;
echo "<br>";
$car->openDoor();
var_dump($car)."<br>";

$motorCycle = new MotorCycle();
$motorCycle->setModel("CG");
$motorCycle->setColor("Red");
$motorCycle->year = 2020;
echo "<br>";
$motorCycle->wheelie();
var_dump($motorCycle)."<br>";

//$motorCycle->Stop(); -> This will not work because the method Stop is private and can only be accessed from the class itself.
//$motorCycle->Action(); -> This will work because the method Action is public and can be accessed from anywhere.