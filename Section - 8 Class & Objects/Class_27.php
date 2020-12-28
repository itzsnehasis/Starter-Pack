<?php 
//Method Chaining
class Shirt
{
	public $price;
	public function __construct($p) {
		$this->price = $p;
	}

	public function display() {
		print "<HR>My price is $this->price";
		return $this;
	}

	public function discount($percent) {
		$this->price *= (100-$percent)/100;
		print "<BR>Applied $percent % Discount";
		return $this;
	}
}
$charlie = new Shirt(2999);
$charlie->display()->discount(50)->display()->discount(49)->display();
