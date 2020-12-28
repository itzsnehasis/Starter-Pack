<HTML>
	<BODY>
	<H1>PHP is Powerful</H1>
<?php

$price = 123;
print "<BR> The Price is Rs. $price, Type: ". gettype($price);

//Apply 50% Discount
$price = $price/2;
print "<BR> The Price is Rs. $price, Type: ". gettype($price);

?>
	</BODY>
</HTML>