<?php

//Aggregation is a special form of association. It is a relationship where the child can exist independently of the parent

class Product {
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Cart{
    public $products;

    public function addProduct(Product $product){ //Aggregation
        $this->products[] = $product; //add a product to the cart
    }

    public function showProducts(){
        foreach($this->products as $product){
            echo $product->name." - ".$product->price."<hr>"; //show the product name and price
        }
    }
}

$product1 = new Product("Product 1", 100); //create a new product
$product2 = new Product("Product 2", 200); 

$cart = new Cart();
//add products to the cart, agregation
$cart->addProduct($product1); 
$cart->addProduct($product2); 
$cart->showProducts(); //show the products in the cart