<?php 
include "connection.php"; 

if( isset($_GET['del_id'])) {
	$sql = "DELETE FROM `pc_parts` WHERE `id` = $_GET[del_id]";
	$db->query($sql);
}
?>
<center>
<table cellpadding = 10 bgcolor = silver>
<tr>
	<td>ID</td>
	<td>Name</td>
	<td>Price</td>
	<td>Details</td>
	<td>Delete</td>
	<td>Edit</td>
</tr>
<?php

$sql = "SELECT * FROM `pc_parts`";
$res = $db->query($sql);
while($row = $res->fetch_array()) {
	print "
<tr bgcolor = white>
	<td>$row[id]</td>
	<td>$row[name]</td>
	<td>$row[price]</td>
	<td>$row[details]</td>
	<td><a href = index.php?del_id=$row[id]>Delete</a></td>
	<td><a href = edit.php?edit_id=$row[id]>Edit</a></td>
</tr>";
}

?>
</table>
<a href="insert.php">Insert</a>
</center>