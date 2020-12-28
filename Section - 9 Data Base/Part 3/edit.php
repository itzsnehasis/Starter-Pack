<?php
include "connection.php"; 

$sql = "SELECT * FROM `pc_parts` WHERE `id` = $_GET[edit_id]";
$res = $db->query($sql);
$row = $res->fetch_array();
?>
<center>
<form method="post" action="edit_response.php">
<input type="hidden" name="id" value = "<?php print $row['id'];?>">
	<h1>Update a PC Part</h1>
	<table cellpadding = 4>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" required value = "<?php print $row['name'];?>"></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><input type="text" name="price" value = "<?php print $row['price'];?>"></td>
	</tr>
	<tr>
		<td>Details</td>
		<td><textarea name="details"><?php print $row['details'];?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value=" Update "></td>
	</tr>

	</table>
</form>
<a href="index.php">Show PC Parts</a>

</center>