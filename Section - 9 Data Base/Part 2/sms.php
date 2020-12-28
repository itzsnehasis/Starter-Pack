<?php
$db = new MySQLi("localhost", "root", "", "School");

if(isset($_POST['fullname'])) {
	$sql = "INSERT INTO `Students` VALUES (NULL, '$_POST[fullname]', '$_POST[marks]') ";
	$res = $db->query($sql);
	print "<H2>$_POST[fullname] Inserted.</H2>";
}


if(isset($_GET['del_id'])) {
	$sql = "DELETE FROM `Students` WHERE `id` = '$_GET[del_id]'";
	$res = $db->query($sql);
	print "<H2>Deleted.</H2>";
}


?>
<HTML>
	<BODY>
	<CENTER>
	<H1>Students Management System - SMS</H1>

	<TABLE BGCOLOR = "SILVER" CELLPADDING = "10">
		<TR>
			<TD>ID</TD>
			<TD>Name</TD>
			<TD>Marks</TD>
		</TR>

	<?php

	$sql = "SELECT * FROM `Students`";
	$res = $db->query($sql);
	while($row = $res->fetch_array()) {
		print "
		<TR BGCOLOR = WHITE>
			<TD>$row[id]</TD>
			<TD>$row[name]</TD>
			<TD>$row[marks]</TD>
			<TD><A HREF = sms.php?del_id=$row[id] ONCLICK = \"return confirm('Are you sure?');\">Delete</A></TD>
		</TR>
		";
	}


	?>
	</TABLE>

	<HR>
	<FORM METHOD = "POST">
	<TABLE>
		<TR>
			<TD>Name</TD>
			<TD><INPUT TYPE = "TEXT" NAME = "fullname"></TD>
		</TR>
		<TR>
			<TD>Marks</TD>
			<TD><INPUT TYPE = "NUMBER" NAME = "marks"></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE = "SUBMIT" VALUE = " Insert "></TD>
		</TR>
	</TABLE>
	</FORM>	

	</CENTER>
	</BODY>
</HTML>