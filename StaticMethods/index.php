<?php

class LoginUser {
    public static $user;

    public static function verifyLogin(){
        //$this ->will give error as $this is not available in static methods
        echo "User ".self::$user." is logged in"; //self:: is used to access static properties ($user)
    }

    public function logOff(){
        echo "User ".self::$user." is logged off";
    }
}

$login = new LoginUser();
$login->logOff();


// static methods/properties can be called without creating an object of the class
/*
LoginUser::$user = "Admin"; 
LoginUser::verifyLogin(); 
*/