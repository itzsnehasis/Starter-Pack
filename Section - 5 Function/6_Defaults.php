<?php

function average($a, $b=5) 
{
	$sum = $a+$b;
	$average = $sum/2;
	return $average;
}

$avg = average(3);
print "<HR> The average is $avg ";

$avg = average(20,40);
print "<HR> The average is $avg ";