<?php

//polimorphism is the ability to call the same method on different objects and each object responding in different way

class Animal {
    public function Walk(){
        echo "Animal is walking";
    }

    public function Run(){
        echo "Animal is running";
    }
}

class Dog extends Animal {

    public function Walk(){ //polimorphism example
        echo "Dog is walking";
    }
    public function Run(){ 
        $this->Run(); //calling Run method from Animal class
    }
}

$animal = new Dog();
$animal->Walk();