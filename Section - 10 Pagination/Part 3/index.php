<?php
$db = new MySQLi("localhost", "root", "", "Company");

if(isset($_GET['page'])) 
	$page = $_GET['page'];
else
	$page = 1;


if(!isset($_GET['rpp']))
	$_GET['rpp'] = 10;

$sql = "SELECT * FROM `JobSeekers`";
$res = $db->query($sql);
$total_records = $res->num_rows;

$total_pages = ceil($total_records/$_GET['rpp']);
?>
<HTML>
	<STYLE>
		.normal {
			border: 1px solid #666;
			background: silver;
			padding: 4px;
			text-decoration: none;
		}
		.selected {
			border: 1px solid #666;
			background: black;
			color: white;
			text-decoration: none;
			padding: 4px;
		}
	</STYLE>
	<BODY STYLE = "font-family: arial;">
		<CENTER>
		<H1>JobSeekers</H1>

		<TABLE BGCOLOR = SILVER CELLPADDING = 6>
			<TR>
				<TD>ID</TD>
				<TD>Name</TD>
				<TD>City</TD>
			</TR>
		<?php

		$start_from = $_GET['rpp']*($page-1);
		$counter = $start_from; 
		$sql = "SELECT * FROM `JobSeekers` LIMIT  $start_from, $_GET[rpp] ";
		$res = $db->query($sql);
		while($row=$res->fetch_array()) {
			$counter++;
			print "
			<TR BGCOLOR = WHITE>
					<TD>$counter</TD>
					<TD>$row[fullname]</TD>
					<TD>$row[city]</TD>
				</TR>
			";
		}
		?>
		</TABLE>
<?php

	print " &nbsp; <A HREF = index.php?page=1&rpp=$_GET[rpp]& class = normal> |<< </A>";


$prev = $page-1;
if($prev>0)
	print " &nbsp; <A HREF = index.php?page=$prev&rpp=$_GET[rpp]& class = normal> < Prev </A>";



$i_start = $page-5;
if($i_start<1) $i_start = 1;

$i_end   = $page+5;
if($i_end>$total_pages)  $i_end = $total_pages;

for($i=$i_start; $i<=$i_end; $i++)
	if($page==$i)
		print " &nbsp; <A HREF = index.php?rpp=$_GET[rpp]&page=$i class = selected>$i</A> ";
	else
		print " &nbsp; <A HREF = index.php?rpp=$_GET[rpp]&page=$i class = normal>$i</A> ";




$next = $page+1;
if($page<$total_pages)
	print "&nbsp; <A HREF = index.php?rpp=$_GET[rpp]&page=$next class = normal> Next> </A>";

print " &nbsp; <A HREF = index.php?rpp=$_GET[rpp]&page=$total_pages class = normal> >>| </A>";

?>
<hr>
Results per page
<script type="text/javascript">
	function nikhil(val) {
		//alert(val);
		//window.location.href='index.php?page=<?php print $page;?>&rpp='+val;
		window.location.href='index.php?rpp='+val;
	}
</script>
<select name = rpp onchange = "nikhil( this.value );">
<?php
if(isset($_GET['rpp']))
	print "<option value = \"$_GET[rpp]\">$_GET[rpp]</option>";
?>	
	<option value = "5">5</option>
	<option value = "10">10</option>
	<option value = "20">20</option>
	<option value = "50">50</option>
	<option value = "100">100</option>
</select>
		</CENTER>
	</BODY>
</HTML>