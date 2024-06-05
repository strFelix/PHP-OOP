<?php

//composer require name/package -> add package
//composer update -> update all packages
//composer remove name/package -> remove package
//composer install -> install all packages on composer.json

require_once "vendor/autoload.php";
use Cocur\Slugify\Slugify;

$slugify = new Slugify(); // slug is a string that is safe to use in URLs
$slugify->addRule("World", "Earth"); // hello-earth
echo $slugify->slugify("Hello World!", "_"); // hello-world
