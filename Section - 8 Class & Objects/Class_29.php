<?php 

trait Greetings
{
	public function sayHello() {
		print "<HR> Hello!!!";
	}
	public function sayHi() {
		print "<HR> Hi, how are you!!!";
	}
	public function sayBye() {
		print "<HR> Bye Bye!!!";
	}
}

trait Swear
{
	public function showAnger() {
		print "<HR> Go to Hell!!!";
	}
}

class Person 
{
	use Greetings, Swear;
}

$amit = new Person;
$amit->sayHi();
$amit->showAnger();