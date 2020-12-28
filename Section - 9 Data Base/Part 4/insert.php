<?php
include "connection.php";

if( isset($_POST['name'] ) ) { 
	$sql = "INSERT INTO `products` (`name`,`price`,`details`) VALUES ('$_POST[name]','$_POST[price]','$_POST[details]')";
	mysqli_query($con, $sql);

	Header("Location: index.php?msg=Insert Successful");
}
?>
<HTML>
	<BODY>
	<CENTER>
	<H1>Insert Product</H1>

<FORM METHOD="POST" ACTION="">
	<TABLE >
	<TR>
		<TD>Name</TD>
		<TD><input type="text" name="name" required></TD>
	</TR>
	<TR>
		<TD>Price</TD>
		<TD><input type="text" name="price" required></TD>
	</TR>
	<TR>
		<TD>Details</TD>
		<TD><textarea name="details"></textarea></TD>
	</TR>
	<TR>
		<TD></TD>
		<TD><input type="submit" value=" Insert "></TD>
	</TR>
	</TABLE>
</FORM>

	<HR>
	<A HREF="index.php">Go Back</A>
	</CENTER>
	</BODY>
</HTML>