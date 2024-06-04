<?php

require 'Classes/Product.php';
require 'Models/Product.php';

use Classes\Product as ProductClasses; //define the namespace to class
use Models\Product as ProductModels; 

$product = new ProductClasses(); // using the alias to call the class
$product->ShowDetais();

//can use same name for class in different namespace

$product = new ProductModels(); // using the alias to call the class
$product->ShowDetais();