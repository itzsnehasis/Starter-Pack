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

class Person 
{
	use Greetings;
}

$amit = new Person;
$amit->sayHi();