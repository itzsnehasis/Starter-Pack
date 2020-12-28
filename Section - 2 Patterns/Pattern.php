<HTML>
	<BODY>
	<CENTER>
		<?php
	
		for($i=1; $i<=10; $i++) {
		
			$x = 2*$i-1;
			print "<BR>";

			for($j=1; $j<=$x; $j++)
				print " * ";
		}

		?>
		</CENTER>
	</BODY>
</HTML>