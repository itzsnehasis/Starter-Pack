<?php

function average($arr) 
{
	$sum = 0;
	foreach ($arr as $val) {
		$sum = $sum + $val;
	}

	return $sum/count($arr);
}

$num =  [2,3,4,5,6] ;
$avg = average( $num );
print "<HR> The average is $avg ";