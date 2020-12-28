<?php
$arr = [23, 45, 15, 12, 74, 66];

for($i=0; $i<count($arr); $i++) {
	
	for($j=$i+1; $j<count($arr); $j++) {
		
		if($arr[$i]>$arr[$j]) {
			$tmp     = $arr[$j];
			$arr[$j] = $arr[$i];
			$arr[$i] = $tmp;
		}
	}

	print "<HR> \$arr[$i] = $arr[$i]:";
	foreach($arr as $x)
		print ",$x";
}