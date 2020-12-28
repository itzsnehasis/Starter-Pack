<?php
include "connection.php";

if( isset($_POST['pid'] ) ) { 
	$sql = "UPDATE `products` 
	           SET 
			       `name`     = '$_POST[name]',
				   `price`    = '$_POST[price]',
				   `details`  = '$_POST[details]'
			WHERE `id` = '$_POST[pid]' ";
	mysqli_query($con, $sql);
	Header("Location: index.php?msg=Update Successful");
}

$sql = "SELECT * FROM `products` WHERE `id` = '$_GET[edit_id]' ";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
?>
<HTML>
	<BODY>
	<CENTER>
	<H1>Edit Product</H1>

<FORM METHOD="POST" ACTION="">
<input type="hidden" name="pid" required value = "<?php print $row['id'];?>">
	<TABLE >
	<TR>
		<TD>Name</TD>
		<TD><input type="text" name="name" required value = "<?php print $row['name'];?>"></TD>
	</TR>
	<TR>
		<TD>Price</TD>
		<TD><input type="text" name="price" required value = "<?php print $row['price'];?>"></TD>
	</TR>
	<TR>
		<TD>Details</TD>
		<TD><textarea name="details"><?php print $row['details'];?></textarea></TD>
	</TR>
	<TR>
		<TD></TD>
		<TD><input type="submit" value=" Edit Product "></TD>
	</TR>
	</TABLE>
</FORM>

	<HR>
	<A HREF="index.php">Go Back</A>
	</CENTER>
	</BODY>
</HTML>