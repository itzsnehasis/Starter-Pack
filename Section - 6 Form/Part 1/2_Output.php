<HTML>
	<BODY>

	<?php
	$name = $_GET['fullname']; 
	$age  = $_GET['age']; 

	for($i=1; $i<=$age; $i++) {
		print "<HR> $i Happy Birthday, $name";
	}
	?>
	</BODY>
</HTML>