<?php
class Computer 
{
	protected $cpu, $ram, $hdd;
	public function __construct($c, $r, $h) {
		$this->cpu = $c;
		$this->ram = $r;
		$this->hdd = $h;
	}
	public function describe() {
		print "<HR>I am a Laptop with $this->cpu GHz CPU, $this->ram GB RAM and  $this->hdd TB HDD. ";
	}
}

class Laptop extends Computer
{
	public $battery;
	public function __construct($c, $r, $h, $b) {
		parent::__construct($c, $r, $h);
		$this->battery = $b;
	}
}

$hp = new Laptop(2.3, 16, 1, 8);
$hp->describe();
print $hp->ram; 
/*
Thread
Cloth

Clock
Watch

Computer
Laptop

Plastic
PlasticBag

Leather
LeatherBag
*/



