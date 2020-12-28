<HTML>
	<BODY>
		<?php
	
		$day    = 1;
		$amount = 1;
		
		//How many days you will have 1 crore at least?
		while($amount<10000000) {
			
			$amount = $amount * 2;
			$day++;

			print "<HR> Day: $day, Amount: $amount";
		}
	
		?>
	</BODY>
</HTML>