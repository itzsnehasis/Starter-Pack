<?php

class Simple
{
	public $msg = "Hello World";

	public function sayHi() {
		print "<H1>Hi!!!!</H1>";
	}
}

Simple::sayHi(); //Call directly without object

//$obj = new Simple;
//$obj->sayHi();