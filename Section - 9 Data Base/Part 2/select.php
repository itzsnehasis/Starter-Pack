<HTML>
	<BODY>
		<H1>Employee Management System</H1>
<?php
$db = new MySQLi("localhost", "root", NULL, "Company");

if(isset($_POST['fullname'])) {
	$sql = "INSERT INTO `Employee` (`fullname`,`salary`) VALUES('$_POST[fullname]', '$_POST[salary]')";
	$db->query($sql);
	print "<H2>$_POST[fullname] has been hired</H2>";
}

if(isset($_GET['fire_id'])) {
	$sql = "DELETE FROM `Employee` WHERE `id` = $_GET[fire_id]";
	$db->query($sql);
}

$sql = "SELECT * FROM `Employee` WHERE 1";
$res = $db->query($sql);
print "<TABLE CELLPADDING = 10 BGCOLOR = SILVER>
<TR>
	<TD>ID</TD>
	<TD>Full Name</TD>
	<TD>Salary</TD>
	<TD>Fire</TD>
</TR>";
while($row = $res->fetch_array()) {
	print "
<TR BGCOLOR = WHITE>
	<TD>$row[id]</TD>
	<TD>$row[fullname]</TD>
	<TD>$row[salary]</TD>
	<TD><A HREF = select.php?fire_id=$row[id]>Fire</A></TD>
</TR>";
}
print "</TABLE>";
?>
<HR>
<FORM METHOD = "POST">
<TABLE>
<TR>
	<TD>FullName</TD>
	<TD><INPUT TYPE = TEXT NAME = "fullname" required></TD>
</TR>
<TR>
	<TD>Salary</TD>
	<TD><INPUT TYPE = TEXT NAME = "salary"></TD>
</TR>
<TR>
	<TD></TD>
	<TD><INPUT TYPE = SUBMIT VALUE = " Insert "></TD>
</TR>
</TABLE>