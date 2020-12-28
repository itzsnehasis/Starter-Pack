<?php

class Phone 
{
	private $brand, $price, $memory;

	public function setValues($b, $p, $m) {
		$this->brand  = $b;
		$this->price  = $p;
		$this->memory = $m;
	}

	public function describe() {
		print "<HR> Hello, I am a $this->brand Phone, my Price is $this->price for a $this->memory GB Model";
	}
}

$xiaomi = new Phone;
$xiaomi->setValues("Xiaomi", 15000,  64);
$xiaomi->describe();

//print $xiaomi->brand;