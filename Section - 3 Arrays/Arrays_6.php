<?php
	
$foods = ["Pizza", "Burger", "Idli", "Dosa"];

$foods[]   = "Pasta";
$foods[100] = "Biriyani";
$foods[]   = "Momo";

foreach( $foods as $food) {
	print "<HR> $food ";
}

foreach( $foods as $key=>$value) {
	print "<HR> $key = $value";
}