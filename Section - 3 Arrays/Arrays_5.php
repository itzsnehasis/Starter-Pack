<?php
	
$data = ["Hello", "Bye", 10, true, 20.56, "Thanks!"];

$data[]   = "This";
$data[10] = "Is";
$data[]   = "A";
$data[]   = "Test";

for($i=0; $i<count($data); $i++)
	print "<HR> $i = ".$data[$i];

?>
