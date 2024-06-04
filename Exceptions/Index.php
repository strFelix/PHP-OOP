<?php

//exception is an ocurrence that changes the normal flow of execution

class NewsLetter {
    public function Subscribe($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //filter_var is a built-in function that validates email
            throw new Exception("Invalid email", 1);
        echo "Subscribed with $email";
    }
}

$newsletter = new NewsLetter();
try {
    $newsletter->Subscribe("test.com");
} catch (Exception $e) { //catches the exception thrown by the Subscribe method 
    echo "Error: ".$e->getMessage()."<br>"; //show the error message
    echo "Error on line: ".$e->getLine()."<br>"; //show the line where the error occured
    echo "Code: ".$e->getCode()."<br>"; //show the error code
    echo "File: ".$e->getFile()."<br>"; //show the file where the error occured
}