
<BODY BGCOLOR = "BLACK">
<BR><BR><CENTER>

<?php

for ($i=1; $i<=21; $i++) {

	for ($j=1; $j<=21; $j++) {

		if($i==1 || $i==21 || $j==1 || $j==21)
		{
			print " <font color = WHITE>* &nbsp; </font>";
		}
		else {
			if($i==11 || $j==11 || $i==$j || $j==22-$i)
				print " <font color = yellow>* &nbsp; </font>";
			else
				print " <font color = #222>* &nbsp; </font>";
		}
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