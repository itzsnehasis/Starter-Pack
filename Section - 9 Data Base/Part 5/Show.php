<?php
				//Host Comp.  User    Pass DBName
$db = new MySQLi("localhost", "root", "", "company");

$sql = "SELECT * FROM `employee` ";
$res = $db->query($sql);

while( $row = $res->fetch_array() ) {
	print "<BR>$row[ID], $row[Name], $row[Salary]";
}