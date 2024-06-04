<?php

class Order {
    public $number;
    public $customer;
}

class Customer {
    public $name;
    public $address;
}

$customer = new Customer();
$customer->name = "Lucas Felix";
$customer->address = "123 Main Street";

$order = new Order();
$order->number = 123;
$order->customer = $customer; //associating the customer object with the order object

$data = array( //creating an array with the order data 
    "number" => $order->number,
    "name" => $order->customer->name,
    "address" => $order->customer->address
);

var_dump($data); //show the data