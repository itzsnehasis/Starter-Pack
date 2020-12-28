<?php

$names  = ["Bill", "Sam", "Tom", "Bob"];
$fruits = ["Apple", "Mango", "Banana", "Guava"];
$foods  = ["Biriyani", "Burger", "Pizza"];

$mix    = [$names, $fruits, $foods];

for($i=0; $i<count($mix); $i++) {
	
	for($j=0; $j<count($mix[$i]); $j++) {
	print $mix[$i][$j]. " &nbsp; " ; 
	}
	print "<BR>";
}
