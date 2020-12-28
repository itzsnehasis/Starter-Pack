<html>
 <body> 
 <?php
 //print_r print a variable in human Readable format
	$data = ["Hello", "Bye", 10, true];
	$data[10] = "Apple";
	$data[]   = "Banana"; //Autoindexing by Array IDENTIFIER
	$data[]   = "Mango";
	
	print "<PRE>";
	var_dump($data);
	print "</PRE>";
 ?>
 </body>
</html>
