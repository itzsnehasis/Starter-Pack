<?php

class Bike 
{
	public $brand, $price, $cc;

	public function __construct($b, $p, $c) {  //New way of Constructor
		$this->brand  = $b;
		$this->price  = $p;
		$this->cc	  = $c;
	}

	public function describe() {
		print "<HR> Hello, I am a $this->brand Bike, my Price is $this->price for a $this->cc CC Model";
	}

}

class ElectricBike extends Bike
{
	//public $range;
}

$revolt = new ElectricBike("Revolt", 13000, 50);
$revolt->describe();