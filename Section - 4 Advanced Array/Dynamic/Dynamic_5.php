<?php

//Create 1000 Variables!!

for($i=1; $i<=1000; $i++) {
	
	${"square_".$i} = $i*$i;
}

print "<BR> 3,  $square_3";
print "<BR> 5,  $square_5";
print "<BR> 11, $square_11";