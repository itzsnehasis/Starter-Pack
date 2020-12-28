<?php

class Belt 
{
	public $type  = "Cloth";
	public $price = 199;

	function sayHello() {
		print "<HR>Hello, I am a Belt! My Type is $type and price is Rs. $price";
	}
}

$b = new Belt;
$b->type  = "Leather";
$b->price = 499;
$b->sayHello();