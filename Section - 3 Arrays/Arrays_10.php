<?php
$arr = [ 12, 36, 18, 9, 2, 28, 56, 42 ];

$max = $arr[0];

foreach($arr as $num) {

	if($max<$num)
		$max = $num;
}

print $max;