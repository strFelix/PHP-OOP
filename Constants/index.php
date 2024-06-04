<?php

class Person {
    const name = "Lucas";

    public function showName(){
        echo self::name; //self is used to access the class constants in the scope of the class
    }
}

class Lucas extends Person {
    const name = "Felix";

    public function showName(){
        echo parent::name; //parent is used to access the class constants in the scope of the mother class (person)
    }
}

$lucas = new Lucas();
$lucas->showName();