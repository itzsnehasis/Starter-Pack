<?php
	if( isset($_GET['name']) ) 
		print "<BR> Name: $_GET[name], Salary: $_GET[salary]";
	else 
		print "Please enter data";
?>
<HR>
<!-- Query String -->
<a href = "Form_GET.php?name=Amit&salary=3456">Amit </a>
<form method="GET" >
<table>
<tr>
	<td>Name</td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td>Salary</td>
	<td><input type="number" name="salary"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value = "Insert"></td>
</tr>
</table>
</form>