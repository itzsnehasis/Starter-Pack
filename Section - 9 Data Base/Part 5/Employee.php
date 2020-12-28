<?php
				//Host Comp.  User    Pass DBName
$db = new MySQLi("localhost", "root", "", "company");

if(isset($_POST['name'])) {
	$sql = "INSERT INTO `employee` (`ID`, `Name`, `Salary`) VALUES (NULL, '$_POST[name]', $_POST[salary])";
	$res = $db->query($sql);
}

$sql = "SELECT * FROM `employee` ";
$res = $db->query($sql);

while( $row = $res->fetch_array() ) {
	print "<BR>$row[ID], $row[Name], $row[Salary]";
}
?>
<HR>
<H2>Insert New Employee</H2>
<form method="post" >
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