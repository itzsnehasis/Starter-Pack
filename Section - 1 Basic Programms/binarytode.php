<?php
	 $num = 101;
	 $temp=$num;
	 $sum=0;
	 while($temp/10!=0) {
		 $r=$temp%10;
		 $temp= $temp/10;
for($i=0; $i<4; $i++) {
	$sum=$sum+ $r*pow(2,$i);
}

	 
	 }
	 print $sum;
?>