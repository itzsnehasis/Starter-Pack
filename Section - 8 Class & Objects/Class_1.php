<?php

class Simple 
{
	var $msg = "Hello World";

	function sayHello() {
		print "Hello, how are you?";
	}
}

$obj = new Simple;
$obj->sayHello();

print "<HR> The variable is ". $obj->msg;