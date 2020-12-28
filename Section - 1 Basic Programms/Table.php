<HTML>
	<BODY>
	<H1>PHP is Powerful</H1>
	
	<TABLE BGCOLOR = "SILVER" CELLPADDING = "10">
		<TR>
			<TD>Number</TD>
            <TD>Square</TD>
        </TR>
	<?php
	$count = 0;
	while($count<10) {
		$count ++;
		$square = $count*$count;
		print "
	<TR BGCOLOR = WHITE>
		<TD>$count</TD>
		<TD>$square</TD>
	</TR>";
	}
	?>
	</TABLE>
	</BODY>
</HTML>