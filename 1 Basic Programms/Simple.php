<?php
echo '
<HTML>
	<BODY>
		<H1>Even Odd</H1> 
		<TABLE BORDER = 1 CELLPADDING = 10>
		<TR>
			<TD>Number</TD>
			<TD>Even/Odd</TD>
		</TR>
		';

for($i=1; $i<=10; $i++) {
	if($i%2==0) {
		$color  = "BLUE";
		$result = "EVEN";
	} else {
		$color  = "PINK";
		$result = "ODD";
	}
	print "
		<TR BGCOLOR = $color>
			<TD>$i</TD>
			<TD>$result</TD>
		</TR>";
}
		
echo '	</TABLE>
	</BODY>
</HTML>';
?>