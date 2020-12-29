<?php
$db = new MySQLi("localhost", "root", "", "Company");

if(isset($_GET['page'])) 
	$page = $_GET['page'];
else
	$page = 1;


?>
<HTML>
	<BODY>
		<CENTER>
		<H1>JobSeekers</H1>

		<TABLE BGCOLOR = SILVER CELLPADDING = 6>
			<TR>
				<TD>ID</TD>
				<TD>Name</TD>
				<TD>City</TD>
			</TR>
		<?php

		$start_from = 10*($page-1);
		$sql = "SELECT * FROM `JobSeekers` LIMIT  $start_from, 10 ";
		$res = $db->query($sql);
		while($row=$res->fetch_array()) {
			print "
			<TR BGCOLOR = WHITE>
					<TD>$row[id]</TD>
					<TD>$row[fullname]</TD>
					<TD>$row[city]</TD>
				</TR>
			";
		}
		?>
		</TABLE>
<?php

$prev = $page-1;
if($prev>0)
	print " &nbsp; <A HREF = index.php?page=$prev> < Prev </A>";


$next = $page+1;
print "&nbsp; <A HREF = index.php?page=$next> Next> </A>";

?>
		</CENTER>
	</BODY>
</HTML>