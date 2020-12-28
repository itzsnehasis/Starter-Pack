<?php

class Simple
{
	public static $msg = "Hello World";

	public static function sayHi() {
		print "<H1>Hi!!!!</H1>";
	}
}

print Simple::$msg;
Simple::sayHi();