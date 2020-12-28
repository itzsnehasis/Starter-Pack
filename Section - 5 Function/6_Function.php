<?php

function average($a, $b) 
{
	$sum = $a+$b;
	$average = $sum/2;
	return $average;
}

$avg = average(3,7);
print "<HR> The average is $avg ";