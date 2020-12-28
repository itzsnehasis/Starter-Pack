<?php
$arr = [ 12, 36, 18, 9, 2, 28, 56, 42 ];

$max = $arr[0];
for($i=1; $i<count($arr); $i++) {
	
	if($max<$arr[$i]) {
		$max = $arr[$i];
	}
}

print $max;