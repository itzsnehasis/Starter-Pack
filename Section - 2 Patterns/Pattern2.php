<HTML>
	<BODY>
		<?php
	
		for($i=1; $i<=10; $i++) {
			print "<BR>";

			$space = 10-$i;
			for($k=1; $k<=$space; $k++)
				print "&nbsp; &nbsp;";

			$x = 2*$i-1;
			for($j=1; $j<=$x; $j++)
				print " * ";
		}

		?>
	</BODY>
</HTML>