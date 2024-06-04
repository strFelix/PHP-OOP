<?php

class login {
    private $email;
    private $password;
    private $name;
    
    //constructor
    public function __construct($email, $password, $name){
        $this->name = $name;
        $this->setEmail($email); //call setEmail function (setter)
        $this->setPassword($password); //call setPassword function (setter)
    }

    //getter and setter
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($emailReceved){
        $email = filter_var($emailReceved, FILTER_SANITIZE_EMAIL); // clean email parameter with filter function
        $this->email = $email;  //property equals a parameter
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;  //property equals a parameter
    }

    public function getNome(){
        return $this->name;
    }

    //methods
    public function login(){
        if($this->email == "teste@teste.com" and $this->password == "123456"): //basic if structure 
            echo "Login Success!";
        else:
            echo "Login Failed!";
        endif;
    }
}

$login = new login("teste@teste.com", "123456", "Lucas"); //create a new object and pass parameters to constructor
$login->login();

echo "<br>";
echo $login->getNome();
