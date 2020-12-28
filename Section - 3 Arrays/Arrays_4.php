<?php
	
$data = ["Hello", "Bye", 10, true, 20.56, "Thanks!"];
$data[6] = "Hi";
for($i=0; $i<count($data); $i++)
	print "<HR>".$data[$i];

?>
