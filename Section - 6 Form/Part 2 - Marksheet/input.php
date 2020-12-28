<form method="post" action="output.php">
	<table cellpadding = 5 bgcolor = silver>
	<tr>
		<td></td>
		<td>Name</td>
		<td></td>
		<td>Marks</td>
	</tr>
	<?php 
	for($i=1; $i<=$_POST['num']; $i++) {
		print '
		<tr bgcolor = white>
			<td>Name '.$i.'</td>
			<td><input type="text" name="fullname[]"></td>
			<td>Marks '.$i.'</td>
			<td><input type="number" name="marks[]"></td>
		</tr> ';
	}
	?>
	<tr>
		<td></td>
		<td><input type="submit" value = " Go "></td>
	</tr>
	</table>
</form>
