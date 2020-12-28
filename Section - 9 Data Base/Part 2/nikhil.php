<?php

//Display

$db = new MySQLi("localhost", "root", NULL, "Company");

$sql = "SELECT * FROM `Employee` WHERE 1";
$res = $db->query($sql);
while($row = $res->fetch_array()) {
	print "<BR> $row[id], $row[fullname], $row[salary] ";
}