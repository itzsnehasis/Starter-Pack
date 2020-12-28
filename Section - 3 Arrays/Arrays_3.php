<?php
	
$names = ["Bill", "Sam", "Tom", "Dan"];

$names[4] = "Harry"; //Change an Array Size
$names[5] = "John"; //Change an Array Size

for($i=0; $i<count($names); $i++) {
	print "<BR> $i $names[$i]";
}

?>
