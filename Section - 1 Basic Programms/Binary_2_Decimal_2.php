<?php
	 $num  = 10111;
	 $temp = $num;
	 $sum  = 0;
	 $count = 0;

	 while($temp>0) {

		 $r   = $temp%10;
		 $temp= ($temp-$r)/10;
	 
	 	 $sum += $r* pow(2, $count); 
		 $count++;
	 }
	 print $sum;
?>