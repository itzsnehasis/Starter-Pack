<HTML>
	<BODY>
	<H1>PHP is Powerful</H1>
<?php

$a = '123.45XY';
print "<HR>  $a has Type: ". gettype($a);

$b = (double) $a;
print "<HR>  $b has Type: ". gettype($b);

$c = (int) $a;
print "<HR>  $c has Type: ". gettype($c);

?>
	</BODY>
</HTML>