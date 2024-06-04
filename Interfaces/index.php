<?php

//interface is a contract that defines the methods that a class must implement

interface Crud {
    public function Create($data);
    public function Read();
    public function Update();
    public function Delete();
}

class News implements Crud { //implemets is used to implement the interface / contract beetwen the class and the interface
    public function Create($data){
        echo "Create news";
    }
    public function Read(){
        echo "Read news";
    }
    public function Update(){
        echo "Update news";
    }
    public function Delete(){
        echo "Delete news";
    }
}