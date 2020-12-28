
<BR><BR><CENTER>
<?php

for ($i=1; $i<=9; $i++) {

	for ($j=1; $j<=9; $j++) {
	
		if($i==5 || $j==5)
			print " <font color = red>* &nbsp; </font>";
		else
			print " * &nbsp; ";
	}
	print "<BR>";
}



/*

			*		*       *
			  *		*     *
				*	*   *
				  *	* *
		    * * * * * * * * *
				  *	* * 
				*	*   *
			  *		*     *
			*		*       *

*/
?>