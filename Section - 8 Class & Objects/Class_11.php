<?php

class Phone 
{
	public $brand, $price, $memory;

	public function __construct($b, $p, $m) {  //New way of Constructor
		$this->brand  = $b;
		$this->price  = $p;
		$this->memory = $m;
	}

	public function describe() {
		print "<HR> Hello, I am a $this->brand Phone, my Price is $this->price for a $this->memory GB Model";
	}

	public function __destruct() { //Destructor
		print "<HR> Bye from $this->brand Phone";

	}
}

$mi = new Phone("Xiaomi", 15000, 64);
$mi->describe();

$moto = new Phone("Motorola", 12000, 32);
$moto->describe();

$iphone = new Phone("iPhone", $moto->price*10, 256);
$iphone->describe();

unset($moto);
?>
<H1>thank you </H1>