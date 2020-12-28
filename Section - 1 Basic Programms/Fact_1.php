<HTML>
	<BODY>
	<H1>Factorials</H1>
	<TABLE BGCOLOR = "SILVER" CELLPADDING = "10">
		<TR>
			<TD>Number</TD>
            <TD>Factorial</TD>
        </TR>
	<?php
	$count = 0;
	while($count<10) {
		$count ++;
		
		//Find Factorial of $count
		$fact = 1;
		for($i=1; $i<=$count; $i++) {
			$fact = $fact * $i;
		}

		print "
	<TR BGCOLOR = WHITE>
		<TD>$count</TD>
		<TD>$fact</TD>
	</TR>";
	}
	?>
	</TABLE>
	</BODY>
</HTML>