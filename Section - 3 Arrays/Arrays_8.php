<?php
$arr = [ 12, 36, 18, 9, 2, 28, 56, 42 ];

$min = $arr[0];
for($i=1; $i<count($arr); $i++) {
	
	if($min>$arr[$i]) {
		$min = $arr[$i];
	}
}

print $min;