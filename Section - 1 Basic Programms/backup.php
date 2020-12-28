<?php
/*
1  0  0  0  0  0
1  1  0  0  0  0
1  2  1  0  0  0
1  3  3  1  0  0
1  4  6  4  1  0
1  5  10 10 5  1
*/

//Fill a Blank Array First!
for($i=0; $i<6; $i++) {
	for($j=0; $j<6; $j++) {
		$arr[$i][$j] = 0;
	}
}

//Initialize
$arr[0][0] = 1;

//Set The Values
	//LOOP
	//$arr[4][4] = $arr[3][3]+ $arr[3][4];

//Print Array for Testing
for($i=0; $i<6; $i++) {
	for($j=0; $j<6; $j++) {
		print " &nbsp; ".$arr[$i][$j];
	}
	print "<BR>";
}
?>