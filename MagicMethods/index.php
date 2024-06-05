<?php

// magic methods are special methods that are called automatically when certain conditions are met

class Person {
    private $data = array();
    
    public function __set($name, $value) // __set is called when we try to set a value to a property that does not exist
    {
        $this->data[$name] = $value;
    }

    public function __get($name){ // __get is called when we try to get a value from a property that does not exist
        return $this->data[$name];
    }

    public function __toString(){ // __toString is called when we try to echo an object
        return "Object to string method called<br>";
    }

    public function __invoke(){ // __invoke is called when we try to call an object as a function
        return "Object with invoke method called<br>";
    }
}

$person = new Person();

$person->name = "Lucas Felix"; // __set method called
$person->age = "20";

echo $person->name."<br>"; // __get method called
echo $person->age."<br>";

echo $person; // Object to string method called

echo $person(); // Object with invoke method called
