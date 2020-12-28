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
	public $range;
	
	public function __construct($b, $p, $c, $r) {  //New way of Constructor
		$this->brand  = $b;
		$this->price  = $p;
		$this->cc	  = $c;
		$this->range  = $r;
	}

	public function describe() {
		print "<HR> Hello, I am a $this->brand Electric Bike, my Price is $this->price for a $this->cc CC Model which can run $this->range KMs on a single charge";
	}
}

$revolt = new ElectricBike("Revolt", 13000, 50, 100);
$revolt->describe();