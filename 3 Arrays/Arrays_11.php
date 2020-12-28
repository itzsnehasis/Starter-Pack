<?php
$arr = [ 12, 36, 18, 9, 2, 28, 56, 42 ];

for($i=0; $i<count($arr); $i++) {
	for($j=$i+1; $j<count($arr); $j++) {
		if($arr[$i] > $arr[$j]) {
			$tmp     = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $tmp;
		}
	}
}

foreach ($arr as $x)
	print "$x -- ";