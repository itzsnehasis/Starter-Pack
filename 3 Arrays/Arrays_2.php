<HTML>
	<BODY>
	<H1> Arrays in PHP </H1>

	<?php
	
	$names = ["Bill", "Sam", "Tom", "Dan"];
	
	for($i=0; $i<count($names); $i++) {
		print "<BR> $i $names[$i]";
	}

	?>

	</BODY>
</HTML>