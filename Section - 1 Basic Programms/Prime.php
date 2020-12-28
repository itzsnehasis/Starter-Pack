<HTML>
	<BODY>
	<H1>PHP is Powerful</H1>
	
	<?php
	$num = 17;
	$flag = true;
	
	//Find if Num is a Prime

	for($i=2; $i<$num; $i++) {
		
		if($num%$i==0) {
			print "<BR> $num is NOT Prime";
			$flag = false;
			break;
		}
	}

	if($flag==true)
		print "<BR> $num is Prime";
	?>
	</BODY>
</HTML>