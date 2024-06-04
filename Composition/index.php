<?php

//composition is a special form of aggregation. It is a relationship where the child cannot exist independently of the parent

class Person{
    public function setName($name){
        return "Name: ".$name;
    }
}

class Show {
    public $person;
    public $name;

    public function __construct($name){ //dependency injection / composition
        $this->person = new Person();
        $this->name = $name;
    }
    public function showName(){
        echo $this->person->setName($this->name);
    }	
}

$show = new Show("Lucas Felix");
$show->showName(); //show the name of the person