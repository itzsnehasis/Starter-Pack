<?php
include "connection.php";

if(isset($_GET['del_id'])) {
	$sql = "DELETE FROM `products` WHERE `id` = '$_GET[del_id]' ";
	mysqli_query($con, $sql);
	$_GET['msg'] = "Delete Successful";
}
?>
<HTML>
	<BODY>
	<CENTER>
	<H1>Products</H1>
<?php
if(isset($_GET['msg'])) 
	print "<h2>$_GET[msg]</h2>";
?>
	<TABLE BGCOLOR = GOLD CELLPADDING = 6>
	<TR>
		<TD>ID</TD>
		<TD>Name</TD>
		<TD>Price</TD>
		<TD>Details</TD>
		<TD>Edit</TD>
		<TD>Delete</TD>
	</TR>
<?php
$sql = "SELECT * FROM `products`";
$res = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($res)) {

	print "	
	<TR bgcolor = white>
		<TD>$row[id]</TD>
		<TD>$row[name]</TD>
		<TD>$row[price]</TD>
		<TD>$row[details]</TD>
		<TD><A HREF = \"edit.php?edit_id=$row[id]\">Edit</A></TD>
		<TD><A HREF = \"index.php?del_id=$row[id]\" ONCLICK = \"return confirm('Delete Permanently?');\">Delete</A></TD>
	</TR>";
}
?>

	</TABLE>
	<HR>
	<A HREF="insert.php">Insert a Product</A>
	</CENTER>
	</BODY>
</HTML>