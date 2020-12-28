<HTML>
	<BODY>
	<H1>PHP is Powerful</H1>
	
	<?php
	 $num = 18;
	 $prime = true;

	 for($i=2; $i<=$num/2; $i++) {
		
		if($num%$i==0) {
			$prime = false;
			break;
		}
	 }

	 if($prime == true)
		print "<HR>$num is a Prime";
	 else
		print "<HR>$num is NOT a Prime";
	?>
	</BODY>
</HTML>