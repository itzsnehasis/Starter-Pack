<?php
$db = new MySQLi("localhost", "root", NULL, "1pm");
?>

<table bgcolor = silver cellpadding = 8>
<tr>
	<td>ID</td>
	<td>Name</td>
	<td>Price</td>
</tr>
<?php
$sql = "SELECT * FROM `foods`";
$res = $db->query($sql);

while($row = $res->fetch_array()) {
	print "<tr bgcolor = white>
	<td>$row[id]</td>
	<td>$row[name]</td>
	<td>$row[price]</td>
</tr>";
	}
?>
</table>
