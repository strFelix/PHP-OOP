<?php

class Person {
    public $age;

    public function __clone() { // __clone() is a magic method that is called when an object is cloned
        echo "Cloning object"."<br>";
    }
}

$person = new Person();
$person->age = 25;

$person2 = clone $person; //$person2 = clone $person; -> $person2 is a copy of $person, returns 25
$person2->age = 35;

echo $person->age; // 35 -> $person2 is a reference to $person