<?php

$db = new MySQLi("localhost", "root", NULL, "1pm");

$sql = "SELECT * FROM `foods`";
$res = $db->query($sql);

while($row = $res->fetch_array()) {
	print "<HR> $row[id], $row[name], $row[price] ";
	}