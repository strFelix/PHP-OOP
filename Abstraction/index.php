<?php

//genereic class (abstract) -> abstract cant be instanciated
abstract class Bank {
    protected $balance;
    protected $withdrawlimit;
    protected $fees;

    public function setBalance($balance){
        $this->balance = $balance;
    }
    public function getBalance(){
        return $this->balance;
    }

    //abstract methods -> must be implemented by the subclasses
    abstract protected function Withdraw($value);
    abstract protected function Deposit($value);
}

class Itau extends Bank {

    public function Withdraw($value){
       $this->balance -= $value;
       echo "Withdraw ".$value." from Itau.<br>";
    }

    public function Deposit($value){
        $this->balance += $value;
        echo "Deposit ".$value." to Itau.<br>";
    }

}

class Bradesco extends Bank {
    public function Withdraw($value){
        $this->balance -= $value;
    }

    public function Deposit($value){
        $this->balance += $value;
    }
}

$itau = new Itau();
$itau->setBalance(1000);
echo "Itau balance: ".$itau->getBalance()."<hr>";
$itau->Withdraw(100);
echo "Itau balance: ".$itau->getBalance()."<hr>";
$itau->Deposit(900);
echo "Itau balance: ".$itau->getBalance()."<hr>";

