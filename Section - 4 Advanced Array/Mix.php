<?php

$data = ["Hello", "Bye", 10, true];
$data[10] = "Apple";
$data[]   = "Banana"; //Autoindexing by Array IDENTIFIER
$data[]   = "Mango";

unset($data[1]);

foreach($data as $key=>$val) {
	print "<HR> $key has $val";
}