<?php
class Shirt
{
	public $price;
	public function __construct($p) {
		$this->price = $p;
	}

	public function display() {
		print "<HR>My price is $this->price";
	}

	public function discount($percent) {
		$this->price *= (100-$percent)/100;
		print "<BR>Applied $percent % Discount";
	}
}
$charlie = new Shirt(2999);
$charlie->display();
$charlie->discount(50);
$charlie->display();
$charlie->discount(49);
$charlie->display();
