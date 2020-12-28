
<BR><BR><CENTER>
<?php

for ($i=1; $i<=9; $i++) {

	for ($j=1; $j<=9; $j++) {
	
		if($i==5 || $j==5 || $i==$j || $j==10-$i)
			print " <font color = red>* &nbsp; </font>";
		else
			print " <font color = yellow>* &nbsp; </font>";
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