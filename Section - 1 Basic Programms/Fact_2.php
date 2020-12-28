<HTML>
	<BODY>
	<CENTER>
		<H1>Factorials</H1>
		<TABLE BGCOLOR = "RED" CELLPADDING = "10">
		<TR>
			<TD>Number</TD>
			<TD>Factorial</TD>
		</TR>
<?php
$fact = 1;
for($i=1; $i<=10; $i++) {
	$fact = $fact * $i;
	print "		
		<TR BGCOLOR = WHITE>
			<TD>$i</TD>
			<TD>$fact</TD>
		</TR>";
}
?>
		</TABLE>
		</CENTER>
	</BODY>
</HTML>