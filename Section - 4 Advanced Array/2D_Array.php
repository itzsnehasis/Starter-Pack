<?php

$names  = ["Bill", "Sam", "Tom", "Bob"];
$fruits = ["Apple", "Mango", "Banana", "Guava"];
$foods  = ["Biriyani", "Burger", "Pizza"];

$mix    = [$names, $fruits, $foods];

foreach($mix as $arr) {

	foreach($arr as $val) {
		print "$val &nbsp; ";
	}
	print "<BR>";
}