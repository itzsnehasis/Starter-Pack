<?php
	 $num  = 110111;
	 $temp = $num;
	 $sum  = 0;
	 $pow = 1;

	 while($temp>0) {

		 $r   = $temp%10;
		 $temp= ($temp-$r)/10;
	 	 $sum += $r* $pow; 
		 
		 $pow= $pow*2;
	 }
	 print $sum;
?>