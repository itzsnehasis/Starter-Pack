<?php

$db = new MySQLi("localhost", "root", NULL, "1pm");

$sql = "SELECT * FROM `foods`";
$res = $db->query($sql);
$row = $res->fetch_assoc();

foreach($row as $field=>$value) {
	print "<HR> $field ";
}